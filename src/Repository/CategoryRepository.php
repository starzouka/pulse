<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * @return list<Category>
     */
    public function findAllOrdered(): array
    {
        return $this->createQueryBuilder('category')
            ->orderBy('category.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<Category>
     */
    public function searchForAdmin(
        ?string $query,
        string $sortBy = 'name',
        string $direction = 'asc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('category')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(category.name) LIKE :query
                    OR LOWER(COALESCE(category.description, \'\')) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $sortDirection = strtoupper(trim($direction)) === 'DESC' ? 'DESC' : 'ASC';
        $sortKey = strtolower(trim($sortBy));
        switch ($sortKey) {
            case 'id':
                $builder->orderBy('category.categoryId', $sortDirection);
                break;

            case 'name':
                $builder
                    ->orderBy('category.name', $sortDirection)
                    ->addOrderBy('category.categoryId', 'ASC');
                break;

            case 'games':
                $builder
                    ->addSelect('(SELECT COUNT(gameSub.gameId) FROM App\Entity\Game gameSub WHERE gameSub.categoryId = category) AS HIDDEN gamesCount')
                    ->orderBy('gamesCount', $sortDirection)
                    ->addOrderBy('category.name', 'ASC');
                break;

            case 'created_at':
            default:
                $builder
                    ->orderBy('category.createdAt', $sortDirection)
                    ->addOrderBy('category.categoryId', 'DESC');
                break;
        }

        return $builder->getQuery()->getResult();
    }
}
