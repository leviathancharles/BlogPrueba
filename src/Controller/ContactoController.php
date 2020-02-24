<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactoType;
use App\Entity\Contacto;

class ContactoController extends AbstractController
{
    /**
     * @Route("/contacto", name="contacto")
     */
    public function crearContacto(Request $request)
    {
        $contacto = new Contacto;
        $form = $this->createForm(ContactoType::class, $contacto);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($contacto);
            $manager->flush();
            
            $this->addFlash('mensaje','se ha guardo el mensaje de contacto');

            return $this->redirectToRoute('contacto');


        }    
        return $this->render('contacto/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
