<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

final class ProfileEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('profilePhoto', FileType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Photo profil',
                'constraints' => [
                    new Image(maxSize: '5M'),
                ],
            ])
            ->add('displayName', TextType::class, [
                'label' => 'Display name',
                'constraints' => [
                    new NotBlank(message: 'Le display name est obligatoire.'),
                    new Length(min: 2, max: 80),
                ],
            ])
            ->add('bio', TextareaType::class, [
                'required' => false,
                'label' => 'Bio',
            ])
            ->add('country', TextType::class, [
                'required' => false,
                'label' => 'Pays',
            ])
            ->add('phone', TextType::class, [
                'required' => false,
                'label' => 'Telephone',
            ])
            ->add('birthDate', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'input' => 'datetime',
                'label' => 'Date de naissance',
            ])
            ->add('gender', ChoiceType::class, [
                'required' => false,
                'label' => 'Genre',
                'choices' => [
                    'Homme' => 'MALE',
                    'Femme' => 'FEMALE',
                    'Autre' => 'OTHER',
                    'Non precise' => 'UNKNOWN',
                ],
            ])
            ->add('isActive', CheckboxType::class, [
                'required' => false,
                'label' => 'Compte actif',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_protection' => true,
        ]);
    }
}

