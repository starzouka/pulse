<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Product;
use App\Entity\Team;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @return list<Product>
     */
    public function searchForShop(
        string $query = '',
        ?int $teamId = null,
        ?float $minPrice = null,
        ?float $maxPrice = null,
        bool $inStockOnly = false,
        bool $activeOnly = true,
        int $limit = 100,
    ): array {
        $builder = $this->createQueryBuilder('product')
            ->leftJoin('product.teamId', 'team')
            ->addSelect('team')
            ->orderBy('product.createdAt', 'DESC')
            ->setMaxResults($limit);

        if ($activeOnly) {
            $builder
                ->andWhere('product.isActive = :isActive')
                ->setParameter('isActive', true);
        }

        $cleanQuery = trim($query);
        if ($cleanQuery !== '') {
            $builder
                ->andWhere('LOWER(product.name) LIKE :query OR LOWER(COALESCE(product.description, \'\')) LIKE :query OR LOWER(team.name) LIKE :query')
                ->setParameter('query', '%' . strtolower($cleanQuery) . '%');
        }

        if ($teamId !== null && $teamId > 0) {
            $builder
                ->andWhere('team.teamId = :teamId')
                ->setParameter('teamId', $teamId);
        }

        if ($minPrice !== null) {
            $builder
                ->andWhere('product.price >= :minPrice')
                ->setParameter('minPrice', (string) $minPrice);
        }

        if ($maxPrice !== null) {
            $builder
                ->andWhere('product.price <= :maxPrice')
                ->setParameter('maxPrice', (string) $maxPrice);
        }

        if ($inStockOnly) {
            $builder
                ->andWhere('product.stockQty > 0');
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<Product>
     */
    public function findByTeamWithFilters(Team $team, string $query = '', bool $includeInactive = false, int $limit = 200): array
    {
        $builder = $this->createQueryBuilder('product')
            ->andWhere('product.teamId = :team')
            ->setParameter('team', $team)
            ->orderBy('product.createdAt', 'DESC')
            ->setMaxResults($limit);

        if (!$includeInactive) {
            $builder
                ->andWhere('product.isActive = :isActive')
                ->setParameter('isActive', true);
        }

        $queryValue = trim($query);
        if ($queryValue !== '') {
            $builder
                ->andWhere('(LOWER(product.name) LIKE :query OR LOWER(COALESCE(product.description, \'\')) LIKE :query OR LOWER(COALESCE(product.sku, \'\')) LIKE :query)')
                ->setParameter('query', '%' . mb_strtolower($queryValue) . '%');
        }

        return $builder->getQuery()->getResult();
    }

    public function findOneByTeamAndId(Team $team, int $productId): ?Product
    {
        if ($productId <= 0) {
            return null;
        }

        return $this->createQueryBuilder('product')
            ->andWhere('product.teamId = :team')
            ->andWhere('product.productId = :productId')
            ->setParameter('team', $team)
            ->setParameter('productId', $productId)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
