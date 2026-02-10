<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\TournamentRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournamentRequestType extends AbstractType
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
            ->add('registrationMode')
            ->add('prizePool')
            ->add('prizeDescription')
            ->add('status')
            ->add('adminResponseNote')
            ->add('createdAt')
            ->add('reviewedByAdminId')
            ->add('reviewedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TournamentRequest::class,
        ]);
    }
}
