<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Game;
use App\Entity\Tournament;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Type;

class TournamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('organizerUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'label' => 'organizer_user_id*',
                'disabled' => (bool) $options['organizer_locked'],
                'constraints' => [
                    new NotBlank(message: "L'organisateur est obligatoire."),
                ],
            ])
            ->add('gameId', EntityType::class, [
                'class' => Game::class,
                'choice_label' => 'name',
                'label' => 'game_id*',
                'constraints' => [
                    new NotBlank(message: 'Le jeu est obligatoire.'),
                ],
            ])
            ->add('title', TextType::class, [
                'label' => 'title*',
                'constraints' => [
                    new NotBlank(message: 'Le titre est obligatoire.'),
                    new Length(min: 3, max: 180),
                ],
            ])
            ->add('startDate', DateType::class, [
                'label' => 'start_date*',
                'widget' => 'single_text',
                'input' => 'datetime',
                'constraints' => [
                    new NotBlank(message: 'La date de debut est obligatoire.'),
                ],
            ])
            ->add('endDate', DateType::class, [
                'label' => 'end_date*',
                'widget' => 'single_text',
                'input' => 'datetime',
                'constraints' => [
                    new NotBlank(message: 'La date de fin est obligatoire.'),
                ],
            ])
            ->add('registrationDeadline', DateType::class, [
                'label' => 'registration_deadline',
                'widget' => 'single_text',
                'input' => 'datetime',
                'required' => false,
            ])
            ->add('maxTeams', IntegerType::class, [
                'label' => 'max_teams*',
                'constraints' => [
                    new NotBlank(message: 'Le nombre maximum d equipes est obligatoire.'),
                    new Range(min: 2, max: 1024, notInRangeMessage: 'Le nombre maximum d equipes doit etre entre {{ min }} et {{ max }}.'),
                ],
            ])
            ->add('format', ChoiceType::class, [
                'label' => 'format*',
                'choices' => [
                    'BO1' => 'BO1',
                    'BO3' => 'BO3',
                    'BO5' => 'BO5',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le format est obligatoire.'),
                    new Choice(choices: ['BO1', 'BO3', 'BO5'], message: 'Format invalide.'),
                ],
            ])
            ->add('registrationMode', ChoiceType::class, [
                'label' => 'registration_mode*',
                'choices' => [
                    'OPEN' => 'OPEN',
                    'APPROVAL' => 'APPROVAL',
                ],
                'constraints' => [
                    new NotBlank(message: "Le mode d'inscription est obligatoire."),
                    new Choice(choices: ['OPEN', 'APPROVAL'], message: "Mode d'inscription invalide."),
                ],
            ])
            ->add('prizePool', NumberType::class, [
                'label' => 'prize_pool*',
                'scale' => 2,
                'invalid_message' => 'Le prize pool doit contenir uniquement des nombres.',
                'html5' => true,
                'attr' => [
                    'min' => '0',
                    'step' => '0.01',
                    'inputmode' => 'decimal',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le prize pool est obligatoire.'),
                    new Type(type: 'numeric', message: 'Le prize pool doit contenir uniquement des nombres.'),
                    new PositiveOrZero(message: 'Le prize pool doit etre superieur ou egal a 0.'),
                ],
            ])
            ->add('prizeDescription', TextareaType::class, [
                'label' => 'prize_description',
                'required' => false,
                'constraints' => [
                    new Length(max: 255),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'description',
                'required' => false,
                'constraints' => [
                    new Length(max: 5000),
                ],
            ])
            ->add('rules', TextareaType::class, [
                'label' => 'rules',
                'required' => false,
                'constraints' => [
                    new Length(max: 5000),
                ],
            ])
            ->add('photoFile', FileType::class, [
                'label' => 'photo_tournoi',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Formats acceptes: JPG, PNG, WEBP.',
                    ]),
                ],
            ])
        ;

        if ((bool) $options['include_status']) {
            $builder->add('status', ChoiceType::class, [
                'label' => 'status*',
                'choices' => [
                    'DRAFT' => 'DRAFT',
                    'OPEN' => 'OPEN',
                    'ONGOING' => 'ONGOING',
                    'FINISHED' => 'FINISHED',
                    'CANCELLED' => 'CANCELLED',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le statut est obligatoire.'),
                    new Choice(choices: ['DRAFT', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED'], message: 'Statut invalide.'),
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournament::class,
            'organizer_locked' => false,
            'include_status' => false,
        ]);

        $resolver->setAllowedTypes('organizer_locked', 'bool');
        $resolver->setAllowedTypes('include_status', 'bool');
    }
}
