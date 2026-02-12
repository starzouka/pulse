<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * @return list<Post>
     */
    public function findLatestVisible(int $limit = 25): array
    {
        return $this->createQueryBuilder('post')
            ->andWhere('(post.isDeleted = :isDeleted OR post.isDeleted IS NULL)')
            ->setParameter('isDeleted', false)
            ->orderBy('post.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Post>
     */
    public function findLatestVisiblePaged(int $limit = 25, int $offset = 0): array
    {
        $safeLimit = max(1, min(50, $limit));
        $safeOffset = max(0, $offset);

        return $this->createQueryBuilder('post')
            ->andWhere('(post.isDeleted = :isDeleted OR post.isDeleted IS NULL)')
            ->setParameter('isDeleted', false)
            ->orderBy('post.createdAt', 'DESC')
            ->setFirstResult($safeOffset)
            ->setMaxResults($safeLimit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Post>
     */
    public function findLatestByAuthor(User $author, int $limit = 25): array
    {
        return $this->createQueryBuilder('post')
            ->andWhere('post.authorUserId = :author')
            ->andWhere('(post.isDeleted = :isDeleted OR post.isDeleted IS NULL)')
            ->setParameter('author', $author)
            ->setParameter('isDeleted', false)
            ->orderBy('post.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
