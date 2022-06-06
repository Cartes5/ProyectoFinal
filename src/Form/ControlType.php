<?php

namespace App\Form;

use App\Entity\Control;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ControlType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre_Taller')
            ->add('Numero_Factura')
            ->add('Precio_Factura')
            ->add('Multas')
            ->add('Numero_Multas')
            ->add('Cantidad_Multas')
            ->add('Equipamiento')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Control::class,
        ]);
    }
}
