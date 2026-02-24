<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Report;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reporterUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
                'constraints' => [
                    new NotBlank(message: 'Le reporter est obligatoire.'),
                ],
            ])
            ->add('targetType', ChoiceType::class, [
                'choices' => [
                    'POST' => 'POST',
                    'COMMENT' => 'COMMENT',
                    'USER' => 'USER',
                    'TEAM' => 'TEAM',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le type cible est obligatoire.'),
                    new Choice(choices: ['POST', 'COMMENT', 'USER', 'TEAM'], message: 'Type cible invalide.'),
                ],
            ])
            ->add('targetId', TextType::class, [
                'constraints' => [
                    new NotBlank(message: "L'identifiant cible est obligatoire."),
                    new Regex(pattern: '/^[1-9][0-9]*$/', message: "L'identifiant cible doit etre positif."),
                ],
            ])
            ->add('reason', TextareaType::class, [
                'constraints' => [
                    new NotBlank(message: 'Le motif est obligatoire.'),
                    new Length(max: 5000, maxMessage: 'Le motif ne doit pas depasser {{ limit }} caracteres.'),
                ],
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'OPEN' => 'OPEN',
                    'IN_REVIEW' => 'IN_REVIEW',
                    'CLOSED' => 'CLOSED',
                ],
                'constraints' => [
                    new NotBlank(message: 'Le statut est obligatoire.'),
                    new Choice(choices: ['OPEN', 'IN_REVIEW', 'CLOSED'], message: 'Statut invalide.'),
                ],
            ])
            ->add('adminNote', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Length(max: 5000, maxMessage: 'La note admin ne doit pas depasser {{ limit }} caracteres.'),
                ],
            ]);

        if ((bool) $options['include_admin_assignment']) {
            $builder->add('handledByAdminId', EntityType::class, [
                'class' => User::class,
                'required' => false,
                'placeholder' => 'Aucun admin',
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Report::class,
            'include_admin_assignment' => false,
        ]);

        $resolver->setAllowedTypes('include_admin_assignment', 'bool');
    }
}
