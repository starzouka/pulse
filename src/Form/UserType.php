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
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Choice;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le username est obligatoire.']),
                    new Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le username doit contenir au moins {{ limit }} caracteres.',
                        'maxMessage' => 'Le username doit contenir au plus {{ limit }} caracteres.',
                    ]),
                ],
            ])
            ->add('email', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => "L'email est obligatoire."]),
                    new Email(['message' => "L'email n'est pas valide."]),
                    new Length(['max' => 190]),
                ],
            ])
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
                'constraints' => [
                    new NotBlank(['message' => 'Le role est obligatoire.']),
                    new Choice([
                        'choices' => [
                            User::DOMAIN_ROLE_PLAYER,
                            User::DOMAIN_ROLE_CAPTAIN,
                            User::DOMAIN_ROLE_ORGANIZER,
                            User::DOMAIN_ROLE_ADMIN,
                        ],
                        'message' => 'Role invalide.',
                    ]),
                ],
            ])
            ->add('displayName', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le display name est obligatoire.']),
                    new Length([
                        'min' => 2,
                        'max' => 80,
                        'minMessage' => 'Le display name doit contenir au moins {{ limit }} caracteres.',
                        'maxMessage' => 'Le display name doit contenir au plus {{ limit }} caracteres.',
                    ]),
                ],
            ])
            ->add('bio', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Length(['max' => 2000]),
                ],
            ])
            ->add('phone', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Length(['max' => 30]),
                    new Regex([
                        'pattern' => '/^$|^[0-9+\-\s().]{6,30}$/',
                        'message' => 'Telephone invalide.',
                    ]),
                ],
            ])
            ->add('country', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Length(['max' => 80]),
                ],
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
                'constraints' => [
                    new Choice([
                        'choices' => ['UNKNOWN', 'MALE', 'FEMALE', 'OTHER'],
                        'message' => 'Genre invalide.',
                    ]),
                ],
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
