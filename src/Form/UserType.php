<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Image;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'required' => (bool) $options['password_required'],
                'constraints' => $options['password_required']
                    ? [
                        new NotBlank(['message' => 'Le mot de passe est obligatoire.']),
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caracteres.',
                        ]),
                    ]
                    : [
                        new Regex([
                            'pattern' => '/^$|.{8,}$/',
                            'message' => 'Le mot de passe doit contenir au moins 8 caracteres.',
                        ]),
                    ],
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'PLAYER' => User::DOMAIN_ROLE_PLAYER,
                    'CAPTAIN' => User::DOMAIN_ROLE_CAPTAIN,
                    'ORGANIZER' => User::DOMAIN_ROLE_ORGANIZER,
                    'ADMIN' => User::DOMAIN_ROLE_ADMIN,
                ],
            ])
            ->add('displayName', TextType::class)
            ->add('bio', TextareaType::class, [
                'required' => false,
            ])
            ->add('phone', TextType::class, [
                'required' => false,
            ])
            ->add('country', TextType::class, [
                'required' => false,
            ])
            ->add('birthDate', DateType::class, [
                'widget' => 'single_text',
                'input' => 'datetime',
                'required' => false,
            ])
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'UNKNOWN' => 'UNKNOWN',
                    'MALE' => 'MALE',
                    'FEMALE' => 'FEMALE',
                    'OTHER' => 'OTHER',
                ],
                'required' => false,
            ])
            ->add('emailVerified', CheckboxType::class, [
                'required' => false,
            ])
            ->add('isActive', CheckboxType::class, [
                'required' => false,
            ])
            ->add('profileImageId', EntityType::class, [
                'class' => Image::class,
                'choice_label' => static function (Image $image): string {
                    $fileUrl = (string) $image->getFileUrl();

                    return sprintf('#%d - %s', (int) $image->getImageId(), $fileUrl);
                },
                'required' => false,
                'placeholder' => 'Aucune image',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'password_required' => true,
        ]);

        $resolver->setAllowedTypes('password_required', 'bool');
    }
}
