<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('postId', EntityType::class, [
                'class' => Post::class,
                'choice_label' => static function (Post $post): string {
                    $content = trim((string) ($post->getContentText() ?? ''));
                    $excerpt = $content === '' ? '[Sans texte]' : mb_substr($content, 0, 40);

                    return sprintf('#%d - %s', (int) $post->getPostId(), $excerpt);
                },
            ])
            ->add('authorUserId', EntityType::class, [
                'class' => User::class,
                'choice_label' => static fn (User $user): string => sprintf('#%d - %s', (int) $user->getUserId(), (string) $user->getUsername()),
            ])
            ->add('parentCommentId', EntityType::class, [
                'class' => Comment::class,
                'required' => false,
                'placeholder' => 'Aucun parent',
                'choice_label' => static function (Comment $comment): string {
                    $content = trim((string) $comment->getContentText());
                    $excerpt = $content === '' ? '[Sans texte]' : mb_substr($content, 0, 40);

                    return sprintf('#%d - %s', (int) $comment->getCommentId(), $excerpt);
                },
            ])
            ->add('contentText', TextareaType::class);

        if ((bool) $options['include_deleted']) {
            $builder->add('isDeleted', CheckboxType::class, [
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
            'include_deleted' => false,
        ]);

        $resolver->setAllowedTypes('include_deleted', 'bool');
    }
}
