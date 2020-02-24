<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EntradaType;
use App\Entity\TipoEntrada;
use App\Entity\Entrada;
use App\Entity\Usuario;

class EntradaController extends AbstractController
{
    /**
     * @Route("/entrada", name="entrada")
     */
    public function index()
    {
        //Prueba de relaciones en entidades

        $manager = $this->getDoctrine()->getManager();
       
        $entradas_repo = $this->getDoctrine()->getRepository(Entrada::class);

        $entradas = $entradas_repo->findAll();
        
         /*    
        $user_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuarios = $user_repo->findAll();

        foreach ($usuarios as $usuario) {
            echo $usuario->getNombre() .'-'. $usuario->getApellido().'<br/>';

            foreach ($usuario->getEntradas() as $entrada) {
                echo $entrada->getTitulo().'<br />'; 
            }
        }
        */

        return $this->render('entrada/index.html.twig', [
            'controller_name' => 'EntradaController',
            'entradas'  => $entradas,
        ]);
    }
    public function crear(Request $request, UserInterface $user)
    {   
        
        $entrada = new Entrada();
        $form = $this->createForm(EntradaType::class, $entrada);
        $form->handleRequest($request);
       

        if($form->isSubmitted() && $form->isValid()){
            
            
            $imagen = $form['imagen']->getData();
            
            $nombre = time().'-'.$imagen->getClientOriginalName();
            $extension = $imagen->guessExtension();
            $imagen->move('imagenes', $nombre);

            $entrada->setImagen($nombre);
            $entrada->setCreacion(new \Datetime('now'));
            $entrada->setActualizacion(new \Datetime('now'));
            $entrada->setUsuario($user);
           
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($entrada);
            $manager->flush();

            return $this->redirect(
                $this->generateUrl('detalle', ['id' => $entrada->getId()])
            );
        }

        return $this->render('entrada/crear.html.twig', [
            'form'      => $form->createView(),
            'editar'    =>false 
        ]);

    }
    public function detalle(Entrada $entrada)
    {
        if(!$entrada){
            $mensaje = "La entrada de blog no existe";
        }else{
            return $this->render('entrada/detalle.html.twig', [
                'entrada'   => $entrada
            ]);
        }   
    }
    public function misEntradas(UserInterface $user)
    {
        $entradas = $user->getEntradas();

        return $this->render('entrada/entradasPropias.html.twig', [
            'entradas'   => $entradas
        ]);
    }
    public function actualizar(Request $request, UserInterface $user, Entrada $entrada)
    {
        if(!$user && $user->getId() != $entrada->getUsuario()->getId()){
            return $this->redirectToRoute('home');
        }

        $form = $this->createForm(EntradaType::class, $entrada);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
            
            $imagen = $form['imagen']->getData();
            
            $nombre = time().'-'.$imagen->getClientOriginalName();
            $extension = $imagen->guessExtension();
            $imagen->move('imagenes', $nombre);

            $entrada->setImagen($nombre);
            $entrada->setActualizacion(new \Datetime('now'));
           
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($entrada);
            $manager->flush();

            return $this->redirect(
                $this->generateUrl('detalle', ['id' => $entrada->getId()])
            );
        }

        return $this->render('entrada/crear.html.twig',[
            'editar'    => true,
            'form'      => $form->createView()
        ]);
    }
    public function eliminar(Entrada $entrada, UserInterface $user)
    {
        if(!$user && $user->getId() != $entrada->getUsuario()->getId()){
            return $this->redirectToRoute('home');
        }
        if(!$entrada){
            return $this->redirectToRoute('home');
        }
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($entrada);
        $manager->flush();

        return $this->redirectToRoute('home');
    }
}
