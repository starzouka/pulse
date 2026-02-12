<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Comment;
use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comment::class);
    }

    /**
     * @return list<Comment>
     */
    public function findLatestRootCommentsForPost(Post $post, int $limit = 3): array
    {
        return $this->createQueryBuilder('comment')
            ->andWhere('comment.postId = :post')
            ->andWhere('comment.isDeleted = :deleted')
            ->andWhere('comment.parentCommentId IS NULL')
            ->setParameter('post', $post)
            ->setParameter('deleted', false)
            ->orderBy('comment.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
