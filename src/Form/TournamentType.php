<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Tournament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('organizerUserId')
            ->add('gameId')
            ->add('title')
            ->add('description')
            ->add('rules')
            ->add('startDate')
            ->add('endDate')
            ->add('registrationDeadline')
            ->add('maxTeams')
            ->add('format')
            ->add('prizePool')
            ->add('prizeDescription')
            ->add('status')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournament::class,
        ]);
    }
}
