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
        $builder = $this->createQueryBuilder('notification')
            ->andWhere('notification.userId = :user')
            ->setParameter('user', $user)
            ->orderBy('notification.createdAt', 'DESC')
            ->setMaxResults($limit);

        if ($onlyUnread) {
            $builder
                ->andWhere('notification.isRead = :isRead')
                ->setParameter('isRead', false);
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
