<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Cart;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }

    public function findOneByUser(User $user): ?Cart
    {
        return $this->findOneBy(['userId' => $user]);
    }

    /**
     * @return list<Cart>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $status,
        string $sortBy = 'updated_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('cart')
            ->leftJoin('cart.userId', 'user')
            ->addSelect('user')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(user.username) LIKE :query
                    OR LOWER(user.email) LIKE :query
                    OR LOWER(COALESCE(user.displayName, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['OPEN', 'LOCKED', 'ORDERED'], true)) {
            $builder
                ->andWhere('cart.status = :status')
                ->setParameter('status', $statusValue);
        }

        $sortDirection = strtoupper(trim($direction)) === 'ASC' ? 'ASC' : 'DESC';
        $sortKey = strtolower(trim($sortBy));
        switch ($sortKey) {
            case 'id':
                $builder->orderBy('cart.cartId', $sortDirection);
                break;

            case 'user':
                $builder
                    ->orderBy('user.username', $sortDirection)
                    ->addOrderBy('cart.cartId', 'DESC');
                break;

            case 'status':
                $builder
                    ->orderBy('cart.status', $sortDirection)
                    ->addOrderBy('cart.cartId', 'DESC');
                break;

            case 'items':
                $builder
                    ->addSelect('(SELECT COUNT(cartItemSub.productId) FROM App\Entity\CartItem cartItemSub WHERE cartItemSub.cartId = cart) AS HIDDEN itemsCount')
                    ->orderBy('itemsCount', $sortDirection)
                    ->addOrderBy('cart.cartId', 'DESC');
                break;

            case 'created_at':
                $builder
                    ->orderBy('cart.createdAt', $sortDirection)
                    ->addOrderBy('cart.cartId', 'DESC');
                break;

            case 'locked_at':
                $builder
                    ->orderBy('cart.lockedAt', $sortDirection)
                    ->addOrderBy('cart.cartId', 'DESC');
                break;

            case 'updated_at':
            default:
                $builder
                    ->orderBy('cart.updatedAt', $sortDirection)
                    ->addOrderBy('cart.cartId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    public function findOneWithUserById(int $id): ?Cart
    {
        if ($id <= 0) {
            return null;
        }

        return $this->createQueryBuilder('cart')
            ->leftJoin('cart.userId', 'user')
            ->addSelect('user')
            ->andWhere('cart.cartId = :id')
            ->setParameter('id', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
