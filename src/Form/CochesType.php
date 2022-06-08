<?php

namespace App\Form;

use App\Entity\Coches;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CochesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Marca')
            ->add('Modelo')
            ->add('Color')
            ->add('Numero_Bastidor')
            ->add('Fecha_ITV')
            ->add('Fecha_Matriculacion')
            ->add('Matricula')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coches::class,
        ]);
    }
}
