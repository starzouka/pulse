<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\TeamInvite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamInviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('teamId')
            ->add('invitedUserId')
            ->add('invitedByUserId')
            ->add('status')
            ->add('message')
            ->add('createdAt')
            ->add('respondedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TeamInvite::class,
        ]);
    }
}
