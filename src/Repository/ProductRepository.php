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
        string $sort = 'latest',
        int $limit = 100,
    ): array {
        $builder = $this->createQueryBuilder('product')
            ->leftJoin('product.teamId', 'team')
            ->addSelect('team')
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

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('product.createdAt', 'ASC')
                    ->addOrderBy('product.productId', 'ASC');
                break;

            case 'name':
                $builder
                    ->orderBy('product.name', 'ASC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'price_high':
                $builder
                    ->orderBy('product.price', 'DESC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'price_low':
                $builder
                    ->orderBy('product.price', 'ASC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'stock_high':
                $builder
                    ->orderBy('product.stockQty', 'DESC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('product.createdAt', 'DESC')
                    ->addOrderBy('product.productId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }

    /**
     * @return list<Product>
     */
    public function findByTeamWithFilters(
        Team $team,
        string $query = '',
        bool $includeInactive = false,
        int $limit = 200,
        string $sort = 'latest',
        bool $inStockOnly = false
    ): array
    {
        $builder = $this->createQueryBuilder('product')
            ->andWhere('product.teamId = :team')
            ->setParameter('team', $team)
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

        if ($inStockOnly) {
            $builder
                ->andWhere('product.stockQty > 0');
        }

        $sortValue = strtolower(trim($sort));
        switch ($sortValue) {
            case 'oldest':
                $builder
                    ->orderBy('product.createdAt', 'ASC')
                    ->addOrderBy('product.productId', 'ASC');
                break;

            case 'name':
                $builder
                    ->orderBy('product.name', 'ASC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'price_high':
                $builder
                    ->orderBy('product.price', 'DESC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'price_low':
                $builder
                    ->orderBy('product.price', 'ASC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'stock_high':
                $builder
                    ->orderBy('product.stockQty', 'DESC')
                    ->addOrderBy('product.createdAt', 'DESC');
                break;

            case 'latest':
            default:
                $builder
                    ->orderBy('product.createdAt', 'DESC')
                    ->addOrderBy('product.productId', 'DESC');
                break;
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

    /**
     * @param list<int> $teamIds
     * @return array<int, int>
     */
    public function countByTeamIds(array $teamIds, bool $activeOnly = false): array
    {
        $filteredIds = array_values(array_unique(array_filter(
            $teamIds,
            static fn (mixed $id): bool => is_int($id) && $id > 0
        )));

        if ($filteredIds === []) {
            return [];
        }

        $builder = $this->createQueryBuilder('product')
            ->select('IDENTITY(product.teamId) AS teamId')
            ->addSelect('COUNT(product.productId) AS productCount')
            ->andWhere('IDENTITY(product.teamId) IN (:teamIds)')
            ->setParameter('teamIds', $filteredIds)
            ->groupBy('product.teamId');

        if ($activeOnly) {
            $builder
                ->andWhere('product.isActive = :isActive')
                ->setParameter('isActive', true);
        }

        $rows = $builder->getQuery()->getArrayResult();
        $counts = [];
        foreach ($rows as $row) {
            $counts[(int) $row['teamId']] = (int) $row['productCount'];
        }

        return $counts;
    }

    /**
     * @return list<Product>
     */
    public function findRelatedActiveByProduct(Product $product, int $limit = 8): array
    {
        $team = $product->getTeamId();
        if (!$team instanceof Team) {
            return [];
        }

        return $this->createQueryBuilder('product')
            ->andWhere('product.teamId = :team')
            ->andWhere('product.isActive = :isActive')
            ->andWhere('product.productId != :currentProductId')
            ->setParameter('team', $team)
            ->setParameter('isActive', true)
            ->setParameter('currentProductId', $product->getProductId() ?? 0)
            ->orderBy('product.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
