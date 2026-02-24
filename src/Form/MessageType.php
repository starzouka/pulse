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
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('senderUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
                'constraints' => [
                    new NotBlank(message: "L'expediteur est obligatoire."),
                ],
            ])
            ->add('receiverUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
                'constraints' => [
                    new NotBlank(message: 'Le destinataire est obligatoire.'),
                ],
            ])
            ->add('bodyText', TextareaType::class, [
                'constraints' => [
                    new NotBlank(message: 'Le message est obligatoire.'),
                    new Length(max: 5000, maxMessage: 'Le message ne doit pas depasser {{ limit }} caracteres.'),
                ],
            ]);

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
