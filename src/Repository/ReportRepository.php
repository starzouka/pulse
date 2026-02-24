<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Report;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Report::class);
    }

    /**
     * @return list<Report>
     */
    public function searchForAdmin(
        ?string $query,
        ?string $status,
        ?string $targetType,
        string $sortBy = 'created_at',
        string $direction = 'desc',
        int $limit = 500
    ): array {
        $builder = $this->createQueryBuilder('report')
            ->leftJoin('report.reporterUserId', 'reporter')
            ->addSelect('reporter')
            ->leftJoin('report.handledByAdminId', 'adminHandler')
            ->addSelect('adminHandler')
            ->setMaxResults($limit);

        $search = trim((string) $query);
        if ($search !== '') {
            $builder
                ->andWhere(
                    'LOWER(report.reason) LIKE :query
                    OR LOWER(reporter.username) LIKE :query
                    OR LOWER(reporter.email) LIKE :query'
                )
                ->setParameter('query', '%' . mb_strtolower($search) . '%');
        }

        $statusValue = strtoupper(trim((string) $status));
        if (in_array($statusValue, ['OPEN', 'IN_REVIEW', 'CLOSED'], true)) {
            $builder
                ->andWhere('report.status = :status')
                ->setParameter('status', $statusValue);
        }

        $targetTypeValue = strtoupper(trim((string) $targetType));
        if (in_array($targetTypeValue, ['POST', 'COMMENT', 'USER', 'TEAM'], true)) {
            $builder
                ->andWhere('report.targetType = :targetType')
                ->setParameter('targetType', $targetTypeValue);
        }

        $sortMap = [
            'id' => 'report.reportId',
            'reporter' => 'reporter.username',
            'target' => 'report.targetType',
            'target_id' => 'report.targetId',
            'status' => 'report.status',
            'created_at' => 'report.createdAt',
        ];

        $sortKey = strtolower(trim($sortBy));
        $sortField = $sortMap[$sortKey] ?? 'report.createdAt';
        $sortDirection = strtoupper(trim($direction)) === 'ASC' ? 'ASC' : 'DESC';

        $builder->orderBy($sortField, $sortDirection);
        if ($sortField !== 'report.reportId') {
            $builder->addOrderBy('report.reportId', 'DESC');
        }

        return $builder->getQuery()->getResult();
    }

    public function findOneForAdminDetail(int $id): ?Report
    {
        return $this->createQueryBuilder('report')
            ->leftJoin('report.reporterUserId', 'reporter')
            ->addSelect('reporter')
            ->leftJoin('report.handledByAdminId', 'adminHandler')
            ->addSelect('adminHandler')
            ->andWhere('report.reportId = :reportId')
            ->setParameter('reportId', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
