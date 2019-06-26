<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('horraire')
            ->add('nbPassager')
            ->add('dateReservation')
            ->add('dateDepart')
            ->add('pointDePrise')
            ->add('commentaire')
            ->add('adresse')
            ->add('codepostal')
            ->add('ville')
            ->add('pays')
            ->add('Horaires_Type')
            ->add('user')
            ->add('departDestination')
            ->add('trajet')
            ->add('facture');
        // ->add('Trajet_lieux');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
