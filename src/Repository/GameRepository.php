<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Game;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class GameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Game::class);
    }

    /**
     * @return list<Game>
     */
    public function findAllWithCategoryOrdered(): array
    {
        return $this->createQueryBuilder('game')
            ->leftJoin('game.categoryId', 'category')
            ->addSelect('category')
            ->orderBy('game.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
