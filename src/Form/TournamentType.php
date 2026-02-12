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
use Symfony\Component\Validator\Constraints\File;

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
            ])
            ->add('gameId', EntityType::class, [
                'class' => Game::class,
                'choice_label' => 'name',
                'label' => 'game_id*',
            ])
            ->add('title', TextType::class, [
                'label' => 'title*',
            ])
            ->add('startDate', DateType::class, [
                'label' => 'start_date*',
                'widget' => 'single_text',
                'input' => 'datetime',
            ])
            ->add('endDate', DateType::class, [
                'label' => 'end_date*',
                'widget' => 'single_text',
                'input' => 'datetime',
            ])
            ->add('registrationDeadline', DateType::class, [
                'label' => 'registration_deadline',
                'widget' => 'single_text',
                'input' => 'datetime',
                'required' => false,
            ])
            ->add('maxTeams', IntegerType::class, [
                'label' => 'max_teams*',
            ])
            ->add('format', ChoiceType::class, [
                'label' => 'format*',
                'choices' => [
                    'BO1' => 'BO1',
                    'BO3' => 'BO3',
                    'BO5' => 'BO5',
                ],
            ])
            ->add('registrationMode', ChoiceType::class, [
                'label' => 'registration_mode*',
                'choices' => [
                    'OPEN' => 'OPEN',
                    'APPROVAL' => 'APPROVAL',
                ],
            ])
            ->add('prizePool', NumberType::class, [
                'label' => 'prize_pool*',
                'scale' => 2,
            ])
            ->add('prizeDescription', TextareaType::class, [
                'label' => 'prize_description',
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'description',
                'required' => false,
            ])
            ->add('rules', TextareaType::class, [
                'label' => 'rules',
                'required' => false,
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
