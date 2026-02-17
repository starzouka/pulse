<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Notification;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class NotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notification::class);
    }

    /**
     * @return list<Notification>
     */
    public function findLatestForUser(User $user, bool $onlyUnread = false, int $limit = 50): array
    {
        return $this->findForUserWithFilters($user, $onlyUnread, null, null, 'latest', $limit);
    }

    /**
     * @return list<Notification>
     */
    public function findForUserWithFilters(
        User $user,
        bool $onlyUnread = false,
        ?string $type = null,
        ?string $query = null,
        string $sort = 'latest',
        int $limit = 50
    ): array
    {
        $builder = $this->createQueryBuilder('notification')
            ->andWhere('notification.userId = :user')
            ->setParameter('user', $user)
            ->setMaxResults($limit);

        if ($onlyUnread) {
            $builder
                ->andWhere('notification.isRead = :isRead')
                ->setParameter('isRead', false);
        }

        $typeValue = strtoupper(trim((string) $type));
        if (in_array($typeValue, [
            'FRIEND_REQUEST',
            'TEAM_INVITE',
            'TEAM_JOIN_RESPONSE',
            'NEW_MESSAGE',
            'TOURNAMENT_REQUEST_STATUS',
            'ORDER_STATUS',
        ], true)) {
            $builder
                ->andWhere('notification.type = :type')
                ->setParameter('type', $typeValue);
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(notification.content) LIKE :query
                    OR LOWER(notification.type) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('notification.createdAt', 'ASC')
                    ->addOrderBy('notification.notificationId', 'ASC');
                break;

            case 'type':
                $builder
                    ->orderBy('notification.type', 'ASC')
                    ->addOrderBy('notification.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('notification.createdAt', 'DESC')
                    ->addOrderBy('notification.notificationId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    public function countUnreadForUser(User $user): int
    {
        return (int) $this->createQueryBuilder('notification')
            ->select('COUNT(notification.notificationId)')
            ->andWhere('notification.userId = :user')
            ->andWhere('notification.isRead = :isRead')
            ->setParameter('user', $user)
            ->setParameter('isRead', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function markAllAsReadForUser(User $user): void
    {
        $this->createQueryBuilder('notification')
            ->update()
            ->set('notification.isRead', ':isRead')
            ->set('notification.readAt', ':readAt')
            ->andWhere('notification.userId = :user')
            ->andWhere('notification.isRead = :currentRead')
            ->setParameter('isRead', true)
            ->setParameter('readAt', new \DateTime())
            ->setParameter('user', $user)
            ->setParameter('currentRead', false)
            ->getQuery()
            ->execute();
    }
}
