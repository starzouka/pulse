<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Message;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    /**
     * @return list<Message>
     */
    public function findConversation(User $viewer, User $otherUser, int $limit = 100): array
    {
        return $this->createQueryBuilder('message')
            ->andWhere(
                '(message.senderUserId = :viewer AND message.receiverUserId = :otherUser AND message.isDeletedBySender = :viewerNotDeletedAsSender)
                OR
                (message.senderUserId = :otherUser AND message.receiverUserId = :viewer AND message.isDeletedByReceiver = :viewerNotDeletedAsReceiver)'
            )
            ->setParameter('viewer', $viewer)
            ->setParameter('otherUser', $otherUser)
            ->setParameter('viewerNotDeletedAsSender', false)
            ->setParameter('viewerNotDeletedAsReceiver', false)
            ->orderBy('message.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<int>
     */
    public function findConversationPartnerIds(User $viewer, ?string $search = null, int $limit = 50): array
    {
        $builder = $this->createQueryBuilder('message')
            ->select(
                'DISTINCT CASE WHEN IDENTITY(message.senderUserId) = :viewerId THEN IDENTITY(message.receiverUserId) ELSE IDENTITY(message.senderUserId) END AS partnerId'
            )
            ->andWhere(
                '(message.senderUserId = :viewer AND message.isDeletedBySender = :notDeletedBySender)
                OR
                (message.receiverUserId = :viewer AND message.isDeletedByReceiver = :notDeletedByReceiver)'
            )
            ->setParameter('viewer', $viewer)
            ->setParameter('viewerId', $viewer->getUserId())
            ->setParameter('notDeletedBySender', false)
            ->setParameter('notDeletedByReceiver', false)
            ->setMaxResults($limit);

        $searchValue = trim((string) $search);
        if ($searchValue !== '') {
            $builder
                ->leftJoin('message.senderUserId', 'senderUser')
                ->leftJoin('message.receiverUserId', 'receiverUser')
                ->andWhere(
                    'LOWER(senderUser.username) LIKE :search OR LOWER(senderUser.displayName) LIKE :search OR LOWER(receiverUser.username) LIKE :search OR LOWER(receiverUser.displayName) LIKE :search'
                )
                ->setParameter('search', '%' . mb_strtolower($searchValue) . '%');
        }

        $rows = $builder->getQuery()->getArrayResult();

        $partnerIds = [];
        foreach ($rows as $row) {
            $partnerId = isset($row['partnerId']) ? (int) $row['partnerId'] : 0;
            if ($partnerId > 0) {
                $partnerIds[] = $partnerId;
            }
        }

        return array_values(array_unique($partnerIds));
    }

    public function countUnreadForReceiver(User $receiver): int
    {
        return (int) $this->createQueryBuilder('message')
            ->select('COUNT(message.messageId)')
            ->andWhere('message.receiverUserId = :receiver')
            ->andWhere('message.isRead = :isRead')
            ->andWhere('message.isDeletedByReceiver = :isDeletedByReceiver')
            ->setParameter('receiver', $receiver)
            ->setParameter('isRead', false)
            ->setParameter('isDeletedByReceiver', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countUnreadFromSender(User $receiver, User $sender): int
    {
        return (int) $this->createQueryBuilder('message')
            ->select('COUNT(message.messageId)')
            ->andWhere('message.receiverUserId = :receiver')
            ->andWhere('message.senderUserId = :sender')
            ->andWhere('message.isRead = :isRead')
            ->andWhere('message.isDeletedByReceiver = :isDeletedByReceiver')
            ->setParameter('receiver', $receiver)
            ->setParameter('sender', $sender)
            ->setParameter('isRead', false)
            ->setParameter('isDeletedByReceiver', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findLatestBetweenUsers(User $viewer, User $otherUser): ?Message
    {
        return $this->createQueryBuilder('message')
            ->andWhere(
                '(message.senderUserId = :viewer AND message.receiverUserId = :otherUser AND message.isDeletedBySender = :viewerNotDeletedAsSender)
                OR
                (message.senderUserId = :otherUser AND message.receiverUserId = :viewer AND message.isDeletedByReceiver = :viewerNotDeletedAsReceiver)'
            )
            ->setParameter('viewer', $viewer)
            ->setParameter('otherUser', $otherUser)
            ->setParameter('viewerNotDeletedAsSender', false)
            ->setParameter('viewerNotDeletedAsReceiver', false)
            ->orderBy('message.createdAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function markConversationAsRead(User $receiver, User $sender): void
    {
        $this->createQueryBuilder('message')
            ->update()
            ->set('message.isRead', ':isRead')
            ->set('message.readAt', ':readAt')
            ->andWhere('message.receiverUserId = :receiver')
            ->andWhere('message.senderUserId = :sender')
            ->andWhere('message.isRead = :currentRead')
            ->setParameter('isRead', true)
            ->setParameter('readAt', new \DateTime())
            ->setParameter('receiver', $receiver)
            ->setParameter('sender', $sender)
            ->setParameter('currentRead', false)
            ->getQuery()
            ->execute();
    }

    /**
     * @return list<Message>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $senderSearch,
        ?string $receiverSearch,
        ?bool $isRead,
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('message')
            ->leftJoin('message.senderUserId', 'sender')
            ->addSelect('sender')
            ->leftJoin('message.receiverUserId', 'receiver')
            ->addSelect('receiver')
            ->orderBy('message.createdAt', 'DESC')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere('LOWER(message.bodyText) LIKE :query')
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $senderQuery = trim((string) $senderSearch);
        if ($senderQuery !== '') {
            $builder
                ->andWhere(
                    'LOWER(sender.username) LIKE :senderQuery
                    OR LOWER(sender.email) LIKE :senderQuery
                    OR LOWER(sender.displayName) LIKE :senderQuery'
                )
                ->setParameter('senderQuery', '%' . mb_strtolower($senderQuery) . '%');
        }

        $receiverQuery = trim((string) $receiverSearch);
        if ($receiverQuery !== '') {
            $builder
                ->andWhere(
                    'LOWER(receiver.username) LIKE :receiverQuery
                    OR LOWER(receiver.email) LIKE :receiverQuery
                    OR LOWER(receiver.displayName) LIKE :receiverQuery'
                )
                ->setParameter('receiverQuery', '%' . mb_strtolower($receiverQuery) . '%');
        }

        if ($isRead !== null) {
            $builder
                ->andWhere('message.isRead = :isRead')
                ->setParameter('isRead', $isRead);
        }

        return $builder->getQuery()->getResult();
    }
}
