<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('passwordHash')
            ->add('role')
            ->add('displayName')
            ->add('bio')
            ->add('phone')
            ->add('country')
            ->add('birthDate')
            ->add('gender')
            ->add('emailVerified')
            ->add('isActive')
            ->add('lastLoginAt')
            ->add('profileImageId')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
