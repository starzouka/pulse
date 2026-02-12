<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\FriendRequest;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FriendRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FriendRequest::class);
    }

    public function findPendingBetweenUsers(User $userA, User $userB): ?FriendRequest
    {
        return $this->createQueryBuilder('friendRequest')
            ->andWhere(
                '(friendRequest.fromUserId = :userA AND friendRequest.toUserId = :userB) OR (friendRequest.fromUserId = :userB AND friendRequest.toUserId = :userA)'
            )
            ->andWhere('friendRequest.status = :status')
            ->setParameter('userA', $userA)
            ->setParameter('userB', $userB)
            ->setParameter('status', 'PENDING')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
