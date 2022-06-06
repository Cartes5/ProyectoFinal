<?php

namespace App\Form;

use App\Entity\Empleados;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpleadosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Apellidos')
            ->add('Email')
            ->add('Telefono')
            ->add('Direccion')
            ->add('Codigo_Postal')
            ->add('Fecha_Nacimiento')
            ->add('NIF')
            ->add('Localidad')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Empleados::class,
        ]);
    }
}
