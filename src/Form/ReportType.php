<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Report;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reporterUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
            ])
            ->add('targetType', ChoiceType::class, [
                'choices' => [
                    'POST' => 'POST',
                    'COMMENT' => 'COMMENT',
                    'USER' => 'USER',
                    'TEAM' => 'TEAM',
                ],
            ])
            ->add('targetId', IntegerType::class)
            ->add('reason', TextareaType::class)
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'OPEN' => 'OPEN',
                    'IN_REVIEW' => 'IN_REVIEW',
                    'CLOSED' => 'CLOSED',
                ],
            ])
            ->add('adminNote', TextareaType::class, [
                'required' => false,
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
