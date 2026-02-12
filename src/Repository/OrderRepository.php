<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\CartItem;
use App\Entity\Order;
use App\Entity\Team;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class OrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    /**
     * @return list<Order>
     */
    public function findByUserWithFilters(
        User $user,
        ?string $status,
        ?\DateTimeInterface $fromDate,
        int $limit = 100,
        ?string $query = null,
        ?\DateTimeInterface $toDate = null,
        string $sort = 'latest'
    ): array
    {
        $builder = $this->createQueryBuilder('orderRecord')
            ->andWhere('orderRecord.userId = :user')
            ->setParameter('user', $user)
            ->setMaxResults($limit);

        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'], true)) {
            $builder
                ->andWhere('orderRecord.status = :status')
                ->setParameter('status', $statusValue);
        }

        if ($fromDate instanceof \DateTimeInterface) {
            $startOfDay = (new \DateTime($fromDate->format('Y-m-d')))->setTime(0, 0, 0);
            $builder
                ->andWhere('orderRecord.createdAt >= :fromDate')
                ->setParameter('fromDate', $startOfDay);
        }

        if ($toDate instanceof \DateTimeInterface) {
            $endOfDay = (new \DateTime($toDate->format('Y-m-d')))->setTime(23, 59, 59);
            $builder
                ->andWhere('orderRecord.createdAt <= :toDate')
                ->setParameter('toDate', $endOfDay);
        }

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(orderRecord.orderNumber) LIKE :query
                    OR LOWER(orderRecord.paymentStatus) LIKE :query
                    OR LOWER(COALESCE(orderRecord.shippingAddress, \'\')) LIKE :query
                    OR LOWER(COALESCE(orderRecord.phoneForDelivery, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('orderRecord.createdAt', 'ASC')
                    ->addOrderBy('orderRecord.orderId', 'ASC');
                break;

            case 'amount_high':
                $builder
                    ->orderBy('orderRecord.totalAmount', 'DESC')
                    ->addOrderBy('orderRecord.createdAt', 'DESC');
                break;

            case 'amount_low':
                $builder
                    ->orderBy('orderRecord.totalAmount', 'ASC')
                    ->addOrderBy('orderRecord.createdAt', 'DESC');
                break;

            case 'status':
                $builder
                    ->orderBy('orderRecord.status', 'ASC')
                    ->addOrderBy('orderRecord.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('orderRecord.createdAt', 'DESC')
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return array{total:int,pending:int,shipping:int}
     */
    public function summarizeForUser(User $user): array
    {
        $orders = $this->createQueryBuilder('orderRecord')
            ->select('orderRecord.status AS status')
            ->andWhere('orderRecord.userId = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getArrayResult();

        $total = count($orders);
        $pending = 0;
        $shipping = 0;

        foreach ($orders as $order) {
            $status = strtoupper((string) ($order['status'] ?? ''));
            if ($status === 'PENDING') {
                ++$pending;
            }
            if ($status === 'SHIPPED') {
                ++$shipping;
            }
        }

        return [
            'total' => $total,
            'pending' => $pending,
            'shipping' => $shipping,
        ];
    }

    /**
     * @return list<Order>
     */
    public function findByTeamWithFilters(Team $team, ?string $status = null, int $limit = 200): array
    {
        $builder = $this->createQueryBuilder('orderRecord')
            ->orderBy('orderRecord.createdAt', 'DESC')
            ->setMaxResults($limit);

        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'], true)) {
            $builder
                ->andWhere('orderRecord.status = :status')
                ->setParameter('status', $statusValue);
        }

        $subQuery = $this->getEntityManager()->createQueryBuilder()
            ->select('1')
            ->from(CartItem::class, 'cartItemFilter')
            ->innerJoin('cartItemFilter.productId', 'productFilter')
            ->andWhere('cartItemFilter.cartId = orderRecord.cartId')
            ->andWhere('productFilter.teamId = :team')
            ->getDQL();

        $builder
            ->andWhere($builder->expr()->exists($subQuery))
            ->setParameter('team', $team);

        return $builder->getQuery()->getResult();
    }
}
