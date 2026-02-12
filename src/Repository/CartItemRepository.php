<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Team;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CartItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartItem::class);
    }

    /**
     * @return list<CartItem>
     */
    public function findByCart(Cart $cart): array
    {
        return $this->findByCartWithFilters($cart, null, null, 'added_asc');
    }

    /**
     * @return list<CartItem>
     */
    public function findByCartWithFilters(
        Cart $cart,
        ?string $query = null,
        ?int $teamId = null,
        string $sort = 'added_asc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('cartItem')
            ->innerJoin('cartItem.productId', 'product')
            ->addSelect('product')
            ->leftJoin('product.teamId', 'team')
            ->addSelect('team')
            ->andWhere('cartItem.cartId = :cart')
            ->setParameter('cart', $cart)
            ->setMaxResults($limit);

        $queryValue = trim((string) $query);
        if ($queryValue !== '') {
            $builder
                ->andWhere(
                    'LOWER(product.name) LIKE :query
                    OR LOWER(COALESCE(product.description, \'\')) LIKE :query
                    OR LOWER(COALESCE(product.sku, \'\')) LIKE :query
                    OR LOWER(COALESCE(team.name, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        if ($teamId !== null && $teamId > 0) {
            $builder
                ->andWhere('IDENTITY(product.teamId) = :teamId')
                ->setParameter('teamId', $teamId);
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'added_desc':
                $builder
                    ->orderBy('cartItem.addedAt', 'DESC')
                    ->addOrderBy('product.name', 'ASC');
                break;

            case 'name':
                $builder
                    ->orderBy('product.name', 'ASC')
                    ->addOrderBy('cartItem.addedAt', 'DESC');
                break;

            case 'price_high':
                $builder
                    ->orderBy('cartItem.unitPriceAtAdd', 'DESC')
                    ->addOrderBy('cartItem.addedAt', 'DESC');
                break;

            case 'price_low':
                $builder
                    ->orderBy('cartItem.unitPriceAtAdd', 'ASC')
                    ->addOrderBy('cartItem.addedAt', 'DESC');
                break;

            case 'qty_high':
                $builder
                    ->orderBy('cartItem.quantity', 'DESC')
                    ->addOrderBy('cartItem.addedAt', 'DESC');
                break;

            case 'added_asc':
            default:
                $builder
                    ->orderBy('cartItem.addedAt', 'ASC')
                    ->addOrderBy('product.name', 'ASC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<CartItem>
     */
    public function findByCartAndTeam(Cart $cart, Team $team): array
    {
        return $this->createQueryBuilder('cartItem')
            ->innerJoin('cartItem.productId', 'product')
            ->addSelect('product')
            ->andWhere('cartItem.cartId = :cart')
            ->andWhere('product.teamId = :team')
            ->setParameter('cart', $cart)
            ->setParameter('team', $team)
            ->orderBy('cartItem.addedAt', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
