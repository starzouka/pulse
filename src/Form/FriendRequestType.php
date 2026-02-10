<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\FriendRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FriendRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fromUserId')
            ->add('toUserId')
            ->add('status')
            ->add('requestMessage')
            ->add('createdAt')
            ->add('respondedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FriendRequest::class,
        ]);
    }
}
