<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class RegistroType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $opciones)
    {
        $builder->add('nombre', TextType::class, array(
            'label' => 'Nombre',
            'attr'  => [
                'class' => 'form-control'
            ] 
        ))->add('apellido', TextType::class, array(
            'label' => 'Apellido',
            'attr'  => [
                'class' => 'form-control'
            ]            
        ))->add('email', EmailType::class, array(
            'label' => 'Email',
            'attr'  => [
                'class' => 'form-control'
            ]    
        ))->add('password', PasswordType::class, array(
            'label' =>'Contraseña',
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