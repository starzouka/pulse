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
        return $this->createQueryBuilder('cartItem')
            ->andWhere('cartItem.cartId = :cart')
            ->setParameter('cart', $cart)
            ->orderBy('cartItem.addedAt', 'ASC')
            ->getQuery()
            ->getResult();
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
