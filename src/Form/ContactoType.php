<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ContactoType extends AbstractType
{ 

    public function buildForm(FormBuilderInterface $builder, array $opciones)
    {
        $builder->add('nombre', TextType::class, array(
            'label' => 'Nombre',
            'attr'  => [
                'class' => 'form-control'
            ]         
        ))->add('correo', EmailType::class, array(
            'label' => 'Email',
            'attr'  => [
                'class' => 'form-control'
            ]         
        ))->add('mensaje', TextareaType::class, array(
            'label' =>'Mensaje',
            'attr'  => [
                'class' => 'form-control'
            ] 
        ))->add('submit', SubmitType::class, array(
            'label' =>'Registrase',
            'attr'  => [
                'class' => 'btn btn-success',
                'style' => 'margin-top:20px'
            ]
        ));
    }    

}

?>