<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\GameRepository;
use App\Repository\TournamentRequestRepository;
use App\Service\Admin\TableExportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRequestsController extends AbstractController
{
    private const STATUSES = ['PENDING', 'ACCEPTED', 'REFUSED'];
    private const SORTS = ['latest', 'oldest', 'title', 'prize', 'status'];

    #[Route('/pages/organizer-requests', name: 'front_organizer_requests', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentRequestRepository $tournamentRequestRepository,
        GameRepository $gameRepository,
    ): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $query = trim((string) $request->query->get('q', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        $status = in_array($status, self::STATUSES, true) ? $status : '';
        $gameId = $request->query->getInt('game', 0);
        $gameId = $gameId > 0 ? $gameId : null;
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        $sort = in_array($sort, self::SORTS, true) ? $sort : 'latest';

        $organizerUserId = (int) ($user->getUserId() ?? 0);
        $tournamentRequests = $organizerUserId > 0
            ? $tournamentRequestRepository->searchForOrganizer($organizerUserId, $query, $status, $gameId, $sort, 500)
            : [];

        return $this->render('front/pages/organizer-requests.html.twig', [
            'tournamentRequests' => $tournamentRequests,
            'availableGames' => $gameRepository->findAllWithCategoryOrdered(),
            'filters' => [
                'q' => $query,
                'status' => $status,
                'game' => $gameId,
                'sort' => $sort,
            ],
            'statusOptions' => self::STATUSES,
            'sortOptions' => self::SORTS,
            'counter' => count($tournamentRequests),
        ]);
    }

    #[Route('/pages/organizer-requests/export/{format}', name: 'front_organizer_requests_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        TournamentRequestRepository $tournamentRequestRepository,
        TableExportService $tableExportService,
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Connexion requise.');
        }

        $query = trim((string) $request->query->get('q', ''));
        $status = strtoupper(trim((string) $request->query->get('status', '')));
        $status = in_array($status, self::STATUSES, true) ? $status : '';
        $gameId = $request->query->getInt('game', 0);
        $gameId = $gameId > 0 ? $gameId : null;
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        $sort = in_array($sort, self::SORTS, true) ? $sort : 'latest';

        $organizerUserId = (int) ($user->getUserId() ?? 0);
        $tournamentRequests = $organizerUserId > 0
            ? $tournamentRequestRepository->searchForOrganizer($organizerUserId, $query, $status, $gameId, $sort, 5000)
            : [];

        $headers = ['ID', 'Titre', 'Jeu', 'Status', 'Start date', 'End date', 'Prize pool', 'Created at'];
        $rows = [];
        foreach ($tournamentRequests as $requestItem) {
            $rows[] = [
                (int) ($requestItem->getRequestId() ?? 0),
                (string) ($requestItem->getTitle() ?? '-'),
                (string) ($requestItem->getGameId()?->getName() ?? '-'),
                (string) ($requestItem->getStatus() ?? '-'),
                $requestItem->getStartDate()?->format('Y-m-d') ?? '-',
                $requestItem->getEndDate()?->format('Y-m-d') ?? '-',
                (string) ($requestItem->getPrizePool() ?? '0'),
                $requestItem->getCreatedAt()?->format('Y-m-d H:i') ?? '-',
            ];
        }

        $timestamp = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Mes Demandes Tournois', $headers, $rows, sprintf('front_organizer_requests_%s.xlsx', $timestamp));
        }

        return $tableExportService->exportPdf('Mes Demandes Tournois', $headers, $rows, sprintf('front_organizer_requests_%s.pdf', $timestamp));
    }
}
