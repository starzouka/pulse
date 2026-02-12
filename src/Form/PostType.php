<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Post;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ((bool) $options['include_author']) {
            $builder->add('authorUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
            ]);
        }

        $builder
            ->add('contentText', TextareaType::class, [
                'required' => false,
            ])
            ->add('visibility', ChoiceType::class, [
                'choices' => [
                    'PUBLIC' => 'PUBLIC',
                    'FRIENDS' => 'FRIENDS',
                    'TEAM_ONLY' => 'TEAM_ONLY',
                ],
            ]);

        if ((bool) $options['include_deleted']) {
            $builder->add('isDeleted', CheckboxType::class, [
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            'include_author' => true,
            'include_deleted' => false,
        ]);

        $resolver->setAllowedTypes('include_author', 'bool');
        $resolver->setAllowedTypes('include_deleted', 'bool');
    }
}
