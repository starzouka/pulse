<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Message;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('senderUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
            ])
            ->add('receiverUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
            ])
            ->add('bodyText', TextareaType::class);

        if ((bool) $options['include_flags']) {
            $builder
                ->add('isRead', CheckboxType::class, [
                    'required' => false,
                ])
                ->add('isDeletedBySender', CheckboxType::class, [
                    'required' => false,
                ])
                ->add('isDeletedByReceiver', CheckboxType::class, [
                    'required' => false,
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
            'include_flags' => true,
        ]);

        $resolver->setAllowedTypes('include_flags', 'bool');
    }
}
