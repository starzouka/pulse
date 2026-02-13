<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Team;
use App\Entity\Tournament;
use App\Entity\TournamentMatch;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class TournamentMatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tournamentId', EntityType::class, [
                'class' => Tournament::class,
                'choice_label' => static fn (Tournament $tournament): string => sprintf(
                    '#%d - %s',
                    $tournament->getTournamentId(),
                    (string) $tournament->getTitle(),
                ),
                'choices' => $options['tournament_choices'],
                'label' => 'tournoi*',
                'disabled' => (bool) $options['tournament_locked'],
                'constraints' => [
                    new NotBlank(message: 'Le tournoi est obligatoire.'),
                ],
            ])
            ->add('roundName', TextType::class, [
                'label' => 'round_name',
                'required' => false,
                'constraints' => [
                    new Length(max: 80, maxMessage: 'Le round ne doit pas depasser {{ limit }} caracteres.'),
                ],
            ])
            ->add('scheduledAt', DateTimeType::class, [
                'label' => 'scheduled_at',
                'widget' => 'single_text',
                'required' => false,
                'input' => 'datetime',
            ])
            ->add('bestOf', ChoiceType::class, [
                'label' => 'best_of',
                'required' => false,
                'placeholder' => 'Choisir',
                'choices' => [
                    'BO1' => 1,
                    'BO3' => 3,
                    'BO5' => 5,
                ],
                'constraints' => [
                    new Choice(choices: [1, 3, 5], message: 'Le format BO est invalide.'),
                    new Range(min: 1, max: 5),
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'status*',
                'choices' => [
                    'SCHEDULED' => 'SCHEDULED',
                    'ONGOING' => 'ONGOING',
                    'FINISHED' => 'FINISHED',
                    'CANCELLED' => 'CANCELLED',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le statut est obligatoire.'),
                    new Choice(
                        choices: ['SCHEDULED', 'ONGOING', 'FINISHED', 'CANCELLED'],
                        message: 'Statut invalide.',
                    ),
                ],
            ])
            ->add('participantTeams', EntityType::class, [
                'class' => Team::class,
                'choice_label' => 'name',
                'choices' => $options['team_choices'],
                'multiple' => true,
                'expanded' => false,
                'mapped' => false,
                'required' => true,
                'label' => 'equipes_participantes*',
                'help' => 'Selectionnez au moins deux equipes.',
                'constraints' => [
                    new Count(min: 2, minMessage: 'Selectionnez au moins {{ limit }} equipes.'),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TournamentMatch::class,
            'tournament_choices' => [],
            'team_choices' => [],
            'tournament_locked' => false,
        ]);

        $resolver->setAllowedTypes('tournament_choices', 'array');
        $resolver->setAllowedTypes('team_choices', 'array');
        $resolver->setAllowedTypes('tournament_locked', 'bool');
    }
}
