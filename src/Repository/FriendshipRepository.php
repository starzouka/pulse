<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Friendship;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FriendshipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Friendship::class);
    }

    /**
     * @return list<Friendship>
     */
    public function findByUser(User $user, int $limit = 50): array
    {
        return $this->createQueryBuilder('friendship')
            ->andWhere('friendship.userId1 = :user OR friendship.userId2 = :user')
            ->setParameter('user', $user)
            ->orderBy('friendship.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function existsBetweenUsers(User $userA, User $userB): bool
    {
        $result = $this->createQueryBuilder('friendship')
            ->select('1')
            ->andWhere(
                '(friendship.userId1 = :userA AND friendship.userId2 = :userB) OR (friendship.userId1 = :userB AND friendship.userId2 = :userA)'
            )
            ->setParameter('userA', $userA)
            ->setParameter('userB', $userB)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $result !== null;
    }
}
