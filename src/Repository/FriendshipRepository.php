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

    /**
     * @return list<User>
     */
    public function findFriendsByUser(
        User $user,
        ?string $query = null,
        string $sort = 'recent',
        int $limit = 100
    ): array {
        $builder = $this->createQueryBuilder('friendship')
            ->leftJoin('friendship.userId1', 'user1')
            ->addSelect('user1')
            ->leftJoin('friendship.userId2', 'user2')
            ->addSelect('user2')
            ->andWhere('friendship.userId1 = :user OR friendship.userId2 = :user')
            ->setParameter('user', $user)
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    '(friendship.userId1 = :user AND (
                        LOWER(user2.username) LIKE :query
                        OR LOWER(user2.displayName) LIKE :query
                        OR LOWER(user2.email) LIKE :query
                    ))
                    OR
                    (friendship.userId2 = :user AND (
                        LOWER(user1.username) LIKE :query
                        OR LOWER(user1.displayName) LIKE :query
                        OR LOWER(user1.email) LIKE :query
                    ))'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('friendship.createdAt', 'ASC');
                break;

            case 'name':
                $builder
                    ->addSelect('CASE WHEN friendship.userId1 = :user THEN LOWER(user2.displayName) ELSE LOWER(user1.displayName) END AS HIDDEN friendName')
                    ->orderBy('friendName', 'ASC')
                    ->addOrderBy('friendship.createdAt', 'DESC');
                break;

            case 'recent':
            default:
                $builder
                    ->orderBy('friendship.createdAt', 'DESC');
                break;
        }

        $friendships = $builder->getQuery()->getResult();

        $friendsById = [];
        foreach ($friendships as $friendship) {
            if (!$friendship instanceof Friendship) {
                continue;
            }

            $firstUser = $friendship->getUserId1();
            $secondUser = $friendship->getUserId2();
            if (!$firstUser instanceof User || !$secondUser instanceof User) {
                continue;
            }

            $friend = $firstUser->getUserId() === $user->getUserId() ? $secondUser : $firstUser;
            $friendId = $friend->getUserId();
            if ($friendId === null) {
                continue;
            }

            $friendsById[$friendId] = $friend;
        }

        return array_values($friendsById);
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
