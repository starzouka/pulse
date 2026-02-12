<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post;
use App\Entity\PostLike;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PostLikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostLike::class);
    }

    public function findOneByPostAndUser(Post $post, User $user): ?PostLike
    {
        return $this->findOneBy([
            'postId' => $post,
            'userId' => $user,
        ]);
    }
}
