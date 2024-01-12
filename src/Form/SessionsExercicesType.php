<?php

namespace App\Form;

use App\Entity\SessionsExercices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionsExercicesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('utilisateurID')
            ->add('exerciceID')
            ->add('date')
            ->add('repetitionsNombre')
            ->add('seriesNombres')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SessionsExercices::class,
        ]);
    }
}
