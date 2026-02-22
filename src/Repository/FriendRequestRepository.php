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
        return $this->findReceivedByUserFiltered($user, null, null, 'latest', $limit);
    }

    /**
     * @return list<FriendRequest>
     */
    public function findLatestSentByUser(User $user, int $limit = 100): array
    {
        return $this->findSentByUserFiltered($user, null, null, 'latest', $limit);
    }

    /**
     * @return list<FriendRequest>
     */
    public function findReceivedByUserFiltered(
        User $user,
        ?string $status = null,
        ?string $query = null,
        string $sort = 'latest',
        int $limit = 100
    ): array {
        $builder = $this->createQueryBuilder('friendRequest')
            ->leftJoin('friendRequest.fromUserId', 'fromUser')
            ->addSelect('fromUser')
            ->andWhere('friendRequest.toUserId = :user')
            ->setParameter('user', $user)
            ->setMaxResults($limit);

        $this->applyRequestFilters($builder, $status, $query, 'fromUser');
        $this->applyRequestSorting($builder, $sort, 'fromUser');

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<FriendRequest>
     */
    public function findSentByUserFiltered(
        User $user,
        ?string $status = null,
        ?string $query = null,
        string $sort = 'latest',
        int $limit = 100
    ): array {
        $builder = $this->createQueryBuilder('friendRequest')
            ->leftJoin('friendRequest.toUserId', 'toUser')
            ->addSelect('toUser')
            ->andWhere('friendRequest.fromUserId = :user')
            ->setParameter('user', $user)
            ->setMaxResults($limit);

        $this->applyRequestFilters($builder, $status, $query, 'toUser');
        $this->applyRequestSorting($builder, $sort, 'toUser');

        return $builder->getQuery()->getResult();
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

    private function applyRequestFilters(
        \Doctrine\ORM\QueryBuilder $builder,
        ?string $status,
        ?string $query,
        string $joinedUserAlias
    ): void {
        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['PENDING', 'ACCEPTED', 'REFUSED', 'CANCELLED'], true)) {
            $builder
                ->andWhere('friendRequest.status = :status')
                ->setParameter('status', $statusValue);
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(' . $joinedUserAlias . '.username) LIKE :query
                    OR LOWER(' . $joinedUserAlias . '.displayName) LIKE :query
                    OR LOWER(' . $joinedUserAlias . '.email) LIKE :query
                    OR LOWER(COALESCE(friendRequest.requestMessage, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }
    }

    private function applyRequestSorting(
        \Doctrine\ORM\QueryBuilder $builder,
        string $sort,
        string $joinedUserAlias
    ): void {
        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('friendRequest.createdAt', 'ASC')
                    ->addOrderBy('friendRequest.requestId', 'ASC');
                break;

            case 'name':
                $builder
                    ->orderBy($joinedUserAlias . '.displayName', 'ASC')
                    ->addOrderBy('friendRequest.createdAt', 'DESC');
                break;

            case 'status':
                $builder
                    ->orderBy('friendRequest.status', 'ASC')
                    ->addOrderBy('friendRequest.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('friendRequest.createdAt', 'DESC')
                    ->addOrderBy('friendRequest.requestId', 'DESC');
                break;
        }
    }
}
