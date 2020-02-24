<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\Usuario;
use App\Entity\Rol;
use App\Form\RegistroType;


class UsuarioController extends AbstractController
{
    /**
     * @Route("/usuario", name="usuario")
     */
    public function registro(Request $request, UserPasswordEncoderInterface $codificador)
    {
        $rol = $this->getDoctrine()->getRepository(Rol::class)->find(2);      

        $usuario = new Usuario;
        $form = $this->createForm(RegistroType::class, $usuario);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->IsValid()){
            
            $usuario->setRolUsuario($rol);
            $cifrado = $codificador->encodePassword($usuario, $usuario->getPassword());
            $usuario->setPassword($cifrado);
            $usuario->setCreacion(new \Datetime('now'));
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($usuario);
            $manager->flush();
            return $this->redirectToRoute('entradas');
        }

        return $this->render('usuario/registro.html.twig', [
            'form'  => $form->createView(),
        ]);
    }

    public function login(AuthenticationUtils $AuthenticationUtils)
    {
        $error = $AuthenticationUtils->getLastAuthenticationError();
        $nombreUsuario = $AuthenticationUtils->getLastUsername();
        return $this->render('usuario/login.html.twig', array(
            'error' => $error,
            'ultimo_usuario'  => $nombreUsuario
        ));
    }
}
