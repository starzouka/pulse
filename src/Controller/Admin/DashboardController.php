<?php

namespace App\Controller\Admin;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    private const ORDER_STATUSES = ['ALL', 'PENDING', 'PAID', 'CANCELLED', 'SHIPPED', 'DELIVERED'];
    private const REPORT_STATUSES = ['ALL', 'OPEN', 'IN_REVIEW', 'CLOSED'];
    private const REQUEST_STATUSES = ['ALL', 'PENDING', 'ACCEPTED', 'REFUSED'];
    private const PERIODS = [7, 30, 90];

    public function __construct(
        private readonly Connection $connection,
    ) {
    }

    #[Route('/admin', name: 'admin_dashboard', methods: ['GET'])]
    #[Route('/admin/dashboard', name: 'admin_dashboard_page', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $filters = $this->resolveFilters($request);
        $dashboard = $this->buildDashboardData($filters);

        return $this->render('admin/index.html.twig', [
            'filters' => $filters,
            'dashboard' => $dashboard,
        ]);
    }

    private function resolveFilters(Request $request): array
    {
        $period = (int) $request->query->get('period', 30);
        if (!in_array($period, self::PERIODS, true)) {
            $period = 30;
        }

        $orderStatus = strtoupper((string) $request->query->get('orderStatus', 'ALL'));
        if (!in_array($orderStatus, self::ORDER_STATUSES, true)) {
            $orderStatus = 'ALL';
        }

        $reportStatus = strtoupper((string) $request->query->get('reportStatus', 'ALL'));
        if (!in_array($reportStatus, self::REPORT_STATUSES, true)) {
            $reportStatus = 'ALL';
        }

        $requestStatus = strtoupper((string) $request->query->get('requestStatus', 'ALL'));
        if (!in_array($requestStatus, self::REQUEST_STATUSES, true)) {
            $requestStatus = 'ALL';
        }

        return [
            'q' => trim((string) $request->query->get('q', '')),
            'period' => $period,
            'orderStatus' => $orderStatus,
            'reportStatus' => $reportStatus,
            'requestStatus' => $requestStatus,
            'periodOptions' => self::PERIODS,
            'orderStatusOptions' => self::ORDER_STATUSES,
            'reportStatusOptions' => self::REPORT_STATUSES,
            'requestStatusOptions' => self::REQUEST_STATUSES,
        ];
    }

    private function buildDashboardData(array $filters): array
    {
        $fromDate = (new \DateTimeImmutable('today'))
            ->modify(sprintf('-%d days', $filters['period'] - 1))
            ->setTime(0, 0, 0);
        $fromDateSql = $fromDate->format('Y-m-d H:i:s');
        $today = new \DateTimeImmutable('today');

        $orderStatusSql = $filters['orderStatus'] === 'ALL' ? '' : ' AND o.status = :orderStatus';
        $reportStatusSql = $filters['reportStatus'] === 'ALL' ? '' : ' AND r.status = :reportStatus';
        $requestStatusSql = $filters['requestStatus'] === 'ALL' ? '' : ' AND tr.status = :requestStatus';

        $search = $filters['q'];
        $searchLike = '%'.$search.'%';
        $hasSearch = $search !== '';

        $orderSearchSql = $hasSearch ? ' AND (o.order_number LIKE :search OR u.username LIKE :search OR u.email LIKE :search)' : '';
        $reportSearchSql = $hasSearch ? ' AND (r.reason LIKE :search OR ru.username LIKE :search)' : '';
        $requestSearchSql = $hasSearch ? ' AND (tr.title LIKE :search OR ou.username LIKE :search OR g.name LIKE :search)' : '';
        $userSearchSql = $hasSearch ? ' WHERE (u.username LIKE :search OR u.email LIKE :search OR u.display_name LIKE :search)' : '';

        $baseOrderParams = ['fromDate' => $fromDateSql];
        if ($filters['orderStatus'] !== 'ALL') {
            $baseOrderParams['orderStatus'] = $filters['orderStatus'];
        }
        if ($hasSearch) {
            $baseOrderParams['search'] = $searchLike;
        }

        $baseReportParams = ['fromDate' => $fromDateSql];
        if ($filters['reportStatus'] !== 'ALL') {
            $baseReportParams['reportStatus'] = $filters['reportStatus'];
        }
        if ($hasSearch) {
            $baseReportParams['search'] = $searchLike;
        }

        $baseRequestParams = ['fromDate' => $fromDateSql];
        if ($filters['requestStatus'] !== 'ALL') {
            $baseRequestParams['requestStatus'] = $filters['requestStatus'];
        }
        if ($hasSearch) {
            $baseRequestParams['search'] = $searchLike;
        }

        try {
            $totalUsers = (int) $this->connection->fetchOne('SELECT COUNT(*) FROM users');
            $newUsers = (int) $this->connection->fetchOne(
                'SELECT COUNT(*) FROM users WHERE created_at >= :fromDate',
                ['fromDate' => $fromDateSql]
            );

            $ordersCount = (int) $this->connection->fetchOne(
                <<<SQL
                SELECT COUNT(*)
                FROM orders o
                INNER JOIN users u ON u.user_id = o.user_id
                WHERE o.created_at >= :fromDate
                {$orderStatusSql}
                {$orderSearchSql}
                SQL,
                $baseOrderParams
            );

            $pendingOrders = (int) $this->connection->fetchOne(
                'SELECT COUNT(*) FROM orders WHERE status = :status',
                ['status' => 'PENDING']
            );

            $revenue = (float) $this->connection->fetchOne(
                'SELECT COALESCE(SUM(total_amount), 0) FROM orders WHERE created_at >= :fromDate AND status IN (\'PAID\', \'SHIPPED\', \'DELIVERED\')',
                ['fromDate' => $fromDateSql]
            );

            $openReports = (int) $this->connection->fetchOne(
                'SELECT COUNT(*) FROM reports WHERE status IN (\'OPEN\', \'IN_REVIEW\')'
            );

            $pendingRequests = (int) $this->connection->fetchOne(
                'SELECT COUNT(*) FROM tournament_requests WHERE status = :status',
                ['status' => 'PENDING']
            );

            $ongoingTournaments = (int) $this->connection->fetchOne(
                'SELECT COUNT(*) FROM tournaments WHERE status = :status',
                ['status' => 'ONGOING']
            );

            $ordersByDayRows = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT DATE(o.created_at) AS day_label, COUNT(*) AS total
                FROM orders o
                WHERE o.created_at >= :fromDate
                {$orderStatusSql}
                GROUP BY DATE(o.created_at)
                ORDER BY day_label ASC
                SQL,
                array_diff_key($baseOrderParams, array_flip(['search']))
            );

            $dayCountMap = [];
            foreach ($ordersByDayRows as $row) {
                $dayCountMap[$row['day_label']] = (int) $row['total'];
            }

            $ordersByDayLabels = [];
            $ordersByDayData = [];
            $cursor = $fromDate;
            while ($cursor <= $today) {
                $sqlDate = $cursor->format('Y-m-d');
                $ordersByDayLabels[] = $cursor->format('d/m');
                $ordersByDayData[] = $dayCountMap[$sqlDate] ?? 0;
                $cursor = $cursor->modify('+1 day');
            }

            $statusRows = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT o.status, COUNT(*) AS total
                FROM orders o
                WHERE o.created_at >= :fromDate
                {$orderStatusSql}
                GROUP BY o.status
                ORDER BY o.status ASC
                SQL,
                array_diff_key($baseOrderParams, array_flip(['search']))
            );

            $statusCountMap = [];
            foreach ($statusRows as $row) {
                $statusCountMap[$row['status']] = (int) $row['total'];
            }

            $registrationsRows = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT t.title, COUNT(tt.team_id) AS total
                FROM tournaments t
                LEFT JOIN tournament_teams tt ON tt.tournament_id = t.tournament_id
                WHERE t.created_at >= :fromDate
                GROUP BY t.tournament_id, t.title
                ORDER BY total DESC, t.title ASC
                LIMIT 8
                SQL,
                ['fromDate' => $fromDateSql]
            );

            $recentOrders = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT o.order_number, o.status, o.total_amount, o.created_at, u.username
                FROM orders o
                INNER JOIN users u ON u.user_id = o.user_id
                WHERE o.created_at >= :fromDate
                {$orderStatusSql}
                {$orderSearchSql}
                ORDER BY o.created_at DESC
                LIMIT 6
                SQL,
                $baseOrderParams
            );

            $recentReports = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT r.report_id, r.target_type, r.status, r.created_at, ru.username
                FROM reports r
                INNER JOIN users ru ON ru.user_id = r.reporter_user_id
                WHERE r.created_at >= :fromDate
                {$reportStatusSql}
                {$reportSearchSql}
                ORDER BY r.created_at DESC
                LIMIT 6
                SQL,
                $baseReportParams
            );

            $recentRequests = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT tr.request_id, tr.title, tr.status, tr.created_at, ou.username AS organizer_name, g.name AS game_name
                FROM tournament_requests tr
                INNER JOIN users ou ON ou.user_id = tr.organizer_user_id
                INNER JOIN games g ON g.game_id = tr.game_id
                WHERE 1 = 1
                {$requestStatusSql}
                {$requestSearchSql}
                ORDER BY tr.created_at DESC
                SQL,
                array_diff_key($baseRequestParams, array_flip(['fromDate']))
            );

            $recentUsersParams = $hasSearch ? ['search' => $searchLike] : [];
            $recentUsers = $this->connection->fetchAllAssociative(
                <<<SQL
                SELECT u.username, u.email, u.role, u.country, u.created_at
                FROM users u
                {$userSearchSql}
                ORDER BY u.created_at DESC
                LIMIT 6
                SQL,
                $recentUsersParams
            );
        } catch (\Throwable) {
            $this->addFlash('warning', 'Le dashboard admin n a pas pu charger les donnees de la base.');

            return [
                'kpi' => [
                    'totalUsers' => 0,
                    'newUsers' => 0,
                    'ordersCount' => 0,
                    'pendingOrders' => 0,
                    'revenue' => 0.0,
                    'openReports' => 0,
                    'pendingRequests' => 0,
                    'ongoingTournaments' => 0,
                ],
                'charts' => [
                    'ordersByDay' => ['labels' => [], 'data' => []],
                    'orderStatuses' => ['labels' => [], 'data' => []],
                    'registrationsByTournament' => ['labels' => [], 'data' => []],
                ],
                'lists' => [
                    'recentOrders' => [],
                    'recentReports' => [],
                    'recentRequests' => [],
                    'recentUsers' => [],
                ],
            ];
        }

        return [
            'kpi' => [
                'totalUsers' => $totalUsers,
                'newUsers' => $newUsers,
                'ordersCount' => $ordersCount,
                'pendingOrders' => $pendingOrders,
                'revenue' => $revenue,
                'openReports' => $openReports,
                'pendingRequests' => $pendingRequests,
                'ongoingTournaments' => $ongoingTournaments,
            ],
            'charts' => [
                'ordersByDay' => [
                    'labels' => $ordersByDayLabels,
                    'data' => $ordersByDayData,
                ],
                'orderStatuses' => [
                    'labels' => array_keys($statusCountMap),
                    'data' => array_values($statusCountMap),
                ],
                'registrationsByTournament' => [
                    'labels' => array_map(
                        static fn (array $row): string => $row['title'],
                        $registrationsRows
                    ),
                    'data' => array_map(
                        static fn (array $row): int => (int) $row['total'],
                        $registrationsRows
                    ),
                ],
            ],
            'lists' => [
                'recentOrders' => $recentOrders,
                'recentReports' => $recentReports,
                'recentRequests' => $recentRequests,
                'recentUsers' => $recentUsers,
            ],
        ];
    }
}
