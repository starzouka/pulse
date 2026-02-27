<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Repository\GameRepository;
use App\Service\Catalog\GamePopularityService;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CatalogDashboardController extends AbstractController
{
    public function __construct(
        private readonly Connection $connection,
    ) {
    }

    #[Route('/admin/catalog-dashboard', name: 'admin_catalog_dashboard', methods: ['GET'])]
    public function index(GameRepository $gameRepository, GamePopularityService $gamePopularityService): Response
    {
        $gamePopularityService->refreshScoresForAllGames(true);

        $statusCounts = $gameRepository->countByStatus();
        $totalGames = array_sum($statusCounts);
        $publishedGames = (int) ($statusCounts['PUBLISHED'] ?? 0);
        $pendingGames = (int) ($statusCounts['PENDING'] ?? 0);
        $draftGames = (int) ($statusCounts['DRAFT'] ?? 0);
        $archivedGames = (int) ($statusCounts['ARCHIVED'] ?? 0);

        $publicationRate = $totalGames > 0
            ? round(($publishedGames / $totalGames) * 100, 2)
            : 0.0;

        $avgReviewDelayHours = (float) ($this->connection->fetchOne(
            <<<SQL
            SELECT COALESCE(AVG(TIMESTAMPDIFF(HOUR, g.created_at, COALESCE(g.reviewed_at, NOW()))), 0)
            FROM games g
            WHERE g.status IN ('PENDING', 'PUBLISHED', 'ARCHIVED')
            SQL
        ) ?? 0.0);

        $monthStart = (new \DateTimeImmutable('first day of this month'))->setTime(0, 0, 0);
        $topCategoriesMonthly = $this->connection->fetchAllAssociative(
            <<<SQL
            SELECT c.name AS category_name, COUNT(gf.user_id) AS total
            FROM game_favorites gf
            INNER JOIN games g ON g.game_id = gf.game_id
            INNER JOIN categories c ON c.category_id = g.category_id
            WHERE gf.created_at >= :monthStart
            GROUP BY c.category_id, c.name
            ORDER BY total DESC, c.name ASC
            LIMIT 6
            SQL,
            ['monthStart' => $monthStart->format('Y-m-d H:i:s')]
        );

        if ($topCategoriesMonthly === []) {
            $topCategoriesMonthly = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT c.name AS category_name, COUNT(g.game_id) AS total
                FROM games g
                INNER JOIN categories c ON c.category_id = g.category_id
                WHERE g.created_at >= :monthStart
                GROUP BY c.category_id, c.name
                ORDER BY total DESC, c.name ASC
                LIMIT 6
                SQL,
                ['monthStart' => $monthStart->format('Y-m-d H:i:s')]
            );
        }

        $trendingGames = $gameRepository->findTrending(8);

        return $this->render('admin/pages/catalog-dashboard.html.twig', [
            'kpi' => [
                'total_games' => $totalGames,
                'published_games' => $publishedGames,
                'pending_games' => $pendingGames,
                'draft_games' => $draftGames,
                'archived_games' => $archivedGames,
                'publication_rate' => $publicationRate,
                'average_review_delay_hours' => round($avgReviewDelayHours, 1),
            ],
            'top_categories_monthly' => $topCategoriesMonthly,
            'trending_games' => $trendingGames,
            'month_label' => $monthStart->format('m/Y'),
        ]);
    }
}
