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

    /**
     * @return list<FriendRequest>
     */
    public function findLatestReceivedByUser(User $user, int $limit = 100): array
    {
        return $this->createQueryBuilder('friendRequest')
            ->andWhere('friendRequest.toUserId = :user')
            ->setParameter('user', $user)
            ->orderBy('friendRequest.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<FriendRequest>
     */
    public function findLatestSentByUser(User $user, int $limit = 100): array
    {
        return $this->createQueryBuilder('friendRequest')
            ->andWhere('friendRequest.fromUserId = :user')
            ->setParameter('user', $user)
            ->orderBy('friendRequest.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findOnePendingReceivedById(User $user, int $requestId): ?FriendRequest
    {
        return $this->findOneBy([
            'requestId' => $requestId,
            'toUserId' => $user,
            'status' => 'PENDING',
        ]);
    }

    public function findOnePendingSentById(User $user, int $requestId): ?FriendRequest
    {
        return $this->findOneBy([
            'requestId' => $requestId,
            'fromUserId' => $user,
            'status' => 'PENDING',
        ]);
    }
}
