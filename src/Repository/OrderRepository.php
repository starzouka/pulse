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

    /**
     * @return list<Order>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $status,
        ?string $paymentStatus,
        ?string $userQuery,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('orderRecord')
            ->leftJoin('orderRecord.userId', 'user')
            ->addSelect('user')
            ->leftJoin('orderRecord.cartId', 'cart')
            ->addSelect('cart')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(orderRecord.orderNumber) LIKE :query
                    OR LOWER(COALESCE(orderRecord.shippingAddress, \'\')) LIKE :query
                    OR LOWER(COALESCE(orderRecord.phoneForDelivery, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'], true)) {
            $builder
                ->andWhere('orderRecord.status = :status')
                ->setParameter('status', $statusValue);
        }

        $paymentStatusValue = strtoupper(trim((string) $paymentStatus));
        if (in_array($paymentStatusValue, ['UNPAID', 'PAID', 'REFUNDED'], true)) {
            $builder
                ->andWhere('orderRecord.paymentStatus = :paymentStatus')
                ->setParameter('paymentStatus', $paymentStatusValue);
        }

        $userSearch = trim((string) $userQuery);
        if ($userSearch !== '') {
            $builder
                ->andWhere(
                    'LOWER(user.username) LIKE :userQuery
                    OR LOWER(user.email) LIKE :userQuery
                    OR LOWER(COALESCE(user.displayName, \'\')) LIKE :userQuery'
                )
                ->setParameter('userQuery', '%' . mb_strtolower($userSearch) . '%');
        }

        $sortDirection = strtoupper(trim($direction)) === 'ASC' ? 'ASC' : 'DESC';
        $sortKey = strtolower(trim($sortBy));
        switch ($sortKey) {
            case 'id':
                $builder->orderBy('orderRecord.orderId', $sortDirection);
                break;

            case 'order_number':
                $builder
                    ->orderBy('orderRecord.orderNumber', $sortDirection)
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;

            case 'user':
                $builder
                    ->orderBy('user.username', $sortDirection)
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;

            case 'status':
                $builder
                    ->orderBy('orderRecord.status', $sortDirection)
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;

            case 'payment_status':
                $builder
                    ->orderBy('orderRecord.paymentStatus', $sortDirection)
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;

            case 'total_amount':
                $builder
                    ->orderBy('orderRecord.totalAmount', $sortDirection)
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;

            case 'paid_at':
                $builder
                    ->orderBy('orderRecord.paidAt', $sortDirection)
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;

            case 'created_at':
            default:
                $builder
                    ->orderBy('orderRecord.createdAt', $sortDirection)
                    ->addOrderBy('orderRecord.orderId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    public function findOneWithRelationsById(int $id): ?Order
    {
        if ($id <= 0) {
            return null;
        }

        return $this->createQueryBuilder('orderRecord')
            ->leftJoin('orderRecord.userId', 'user')
            ->addSelect('user')
            ->leftJoin('orderRecord.cartId', 'cart')
            ->addSelect('cart')
            ->andWhere('orderRecord.orderId = :id')
            ->setParameter('id', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
