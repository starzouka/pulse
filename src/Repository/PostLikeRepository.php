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

        $rows = $this->createQueryBuilder('postLike')
            ->select('IDENTITY(postLike.postId) AS postId, COUNT(IDENTITY(postLike.userId)) AS likesCount')
            ->andWhere('IDENTITY(postLike.postId) IN (:postIds)')
            ->setParameter('postIds', $filteredPostIds)
            ->groupBy('postLike.postId')
            ->getQuery()
            ->getArrayResult();

        $countsByPostId = [];
        foreach ($rows as $row) {
            $postId = (int) ($row['postId'] ?? 0);
            if ($postId <= 0) {
                continue;
            }

            $countsByPostId[$postId] = (int) ($row['likesCount'] ?? 0);
        }

        return $countsByPostId;
    }
}
