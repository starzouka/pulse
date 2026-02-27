<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Product;
use App\Entity\ProductRating;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductRating>
 */
class ProductRatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductRating::class);
    }

    /**
     * Trouve la note moyenne d\'un produit
     */
    public function getAverageRatingForProduct(Product $product): ?float
    {
        $result = $this->createQueryBuilder('pr')
            ->select('AVG(pr.rating) as avgRating')
            ->where('pr.product = :product')
            ->setParameter('product', $product)
            ->getQuery()
            ->getSingleScalarResult();

        return $result !== null ? (float) $result : null;
    }

    /**
     * Trouve le nombre de votes pour un produit
     */
    public function getRatingCountForProduct(Product $product): int
    {
        $result = $this->createQueryBuilder('pr')
            ->select('COUNT(pr.ratingId) as ratingCount')
            ->where('pr.product = :product')
            ->setParameter('product', $product)
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $result;
    }

    /**
     * Trouve la note d\'un utilisateur pour un produit
     */
    public function findUserRatingForProduct(User $user, Product $product): ?ProductRating
    {
        return $this->createQueryBuilder('pr')
            ->where('pr.user = :user')
            ->andWhere('pr.product = :product')
            ->setParameter('user', $user)
            ->setParameter('product', $product)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Trouve tous les votes pour un produit
     */
    public function findRatingsByProduct(Product $product, int $limit = 10, int $offset = 0): array
    {
        return $this->createQueryBuilder('pr')
            ->where('pr.product = :product')
            ->setParameter('product', $product)
            ->orderBy('pr.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery()
            ->getResult();
    }
}
