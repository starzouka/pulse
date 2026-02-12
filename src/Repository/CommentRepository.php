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

    /**
     * @return list<Comment>
     */
    public function searchForAdmin(
        ?string $query,
        ?bool $isDeleted,
        ?\DateTimeInterface $date,
        ?int $postId,
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('comment')
            ->leftJoin('comment.authorUserId', 'author')
            ->addSelect('author')
            ->leftJoin('comment.postId', 'post')
            ->addSelect('post')
            ->orderBy('comment.createdAt', 'DESC')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(comment.contentText) LIKE :query
                    OR LOWER(author.username) LIKE :query
                    OR LOWER(author.email) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        if ($isDeleted !== null) {
            $builder
                ->andWhere('comment.isDeleted = :isDeleted')
                ->setParameter('isDeleted', $isDeleted);
        }

        if (is_int($postId) && $postId > 0) {
            $builder
                ->andWhere('post.postId = :postId')
                ->setParameter('postId', $postId);
        }

        if ($date instanceof \DateTimeInterface) {
            $start = (new \DateTimeImmutable($date->format('Y-m-d')))->setTime(0, 0, 0);
            $end = $start->modify('+1 day');

            $builder
                ->andWhere('comment.createdAt >= :start')
                ->andWhere('comment.createdAt < :end')
                ->setParameter('start', $start)
                ->setParameter('end', $end);
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @param list<int> $postIds
     * @return array<int, int>
     */
    public function countByPostIds(array $postIds): array
    {
        $filteredPostIds = array_values(array_unique(array_filter(
            $postIds,
            static fn (mixed $postId): bool => is_int($postId) && $postId > 0
        )));
        if ($filteredPostIds === []) {
            return [];
        }

        $rows = $this->createQueryBuilder('comment')
            ->select('IDENTITY(comment.postId) AS postId, COUNT(comment.commentId) AS commentsCount')
            ->andWhere('IDENTITY(comment.postId) IN (:postIds)')
            ->setParameter('postIds', $filteredPostIds)
            ->groupBy('comment.postId')
            ->getQuery()
            ->getArrayResult();

        $countsByPostId = [];
        foreach ($rows as $row) {
            $postId = (int) ($row['postId'] ?? 0);
            if ($postId <= 0) {
                continue;
            }

            $countsByPostId[$postId] = (int) ($row['commentsCount'] ?? 0);
        }

        return $countsByPostId;
    }
}
