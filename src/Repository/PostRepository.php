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

    /**
     * @return list<Post>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $visibility,
        ?bool $isDeleted,
        ?string $authorSearch,
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('post')
            ->leftJoin('post.authorUserId', 'author')
            ->addSelect('author')
            ->orderBy('post.createdAt', 'DESC')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere('LOWER(COALESCE(post.contentText, \'\')) LIKE :query')
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $visibilityValue = strtoupper(trim((string) $visibility));
        if (in_array($visibilityValue, ['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], true)) {
            $builder
                ->andWhere('post.visibility = :visibility')
                ->setParameter('visibility', $visibilityValue);
        }

        if ($isDeleted !== null) {
            $builder
                ->andWhere('post.isDeleted = :isDeleted')
                ->setParameter('isDeleted', $isDeleted);
        }

        $authorQuery = trim((string) $authorSearch);
        if ($authorQuery !== '') {
            $builder
                ->andWhere(
                    'LOWER(author.username) LIKE :authorQuery
                    OR LOWER(author.email) LIKE :authorQuery
                    OR LOWER(author.displayName) LIKE :authorQuery'
                )
                ->setParameter('authorQuery', '%' . mb_strtolower($authorQuery) . '%');
        }

        return $builder->getQuery()->getResult();
    }
}
