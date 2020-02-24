<?php
namespace App\Form;

use App\Entity\TipoEntrada;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class EntradaType extends AbstractType
{ 

    public function buildForm(FormBuilderInterface $builder, array $opciones)
    {
        $builder->add('titulo', TextType::class, array(
            'label' => 'Titulo',
            'attr'  => [
                'class' => 'form-control'
            ]
        ))->add('contenido', TextareaType::class, array(
            'label' => 'Contenido',
            'attr'  => [
                'class' => 'form-control'
            ]
        ))->add('tipo', EntityType::class, array(
            'label' => 'Tema Relacionado',
            'class' => TipoEntrada::class,
            'choice_label' => 'tipoEntrada',
            'attr'  => [
                'class' => 'form-control'
            ]
        ))->add('imagen', FileType::class, array(
            'data_class' => null,
            'attr'  => [
                'class' => 'form-control'
            ]   
        ))->add('submit', SubmitType::class, array(
            'label' =>'Guardar',
            'attr'  => [
                'class' => 'btn btn-success',
                'style' => 'margin-top:20px'
            ] 
        ));
    }    

}

?>