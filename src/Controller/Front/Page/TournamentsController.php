<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Repository\TournamentMatchRepository;
use App\Repository\TournamentRepository;
use App\Repository\TournamentTeamRepository;
use App\Service\Admin\TableExportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentsController extends AbstractController
{
    private const STATUSES = ['DRAFT', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED'];
    private const FORMATS = ['BO1', 'BO3', 'BO5'];
    private const REGISTRATION_MODES = ['OPEN', 'APPROVAL'];
    private const SORTS = ['latest', 'prize', 'progress'];

    #[Route('/pages/tournaments', name: 'front_tournaments', methods: ['GET'])]
    public function index(
        Request $request,
        TournamentRepository $tournamentRepository,
        TournamentTeamRepository $tournamentTeamRepository,
        TournamentMatchRepository $tournamentMatchRepository,
        GameRepository $gameRepository,
        CategoryRepository $categoryRepository,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $gameId = $this->toPositiveInt($request->query->get('game'));
        $categoryId = $this->toPositiveInt($request->query->get('category'));
        $status = $this->sanitizeEnum((string) $request->query->get('status', ''), self::STATUSES);
        $format = $this->sanitizeEnum((string) $request->query->get('format', ''), self::FORMATS);
        $registrationMode = $this->sanitizeEnum((string) $request->query->get('registration_mode', ''), self::REGISTRATION_MODES);
        $sort = $this->sanitizeEnum((string) $request->query->get('sort', 'latest'), self::SORTS) ?? 'latest';

        $dateFromRaw = trim((string) $request->query->get('date_from', ''));
        $dateToRaw = trim((string) $request->query->get('date_to', ''));
        $dateFrom = $this->parseDate($dateFromRaw);
        $dateTo = $this->parseDate($dateToRaw);

        $prizeMinRaw = trim((string) $request->query->get('prize_min', ''));
        $prizeMaxRaw = trim((string) $request->query->get('prize_max', ''));
        $prizeMin = $this->toFloatOrNull($prizeMinRaw);
        $prizeMax = $this->toFloatOrNull($prizeMaxRaw);

        if ($prizeMin !== null && $prizeMax !== null && $prizeMin > $prizeMax) {
            [$prizeMin, $prizeMax] = [$prizeMax, $prizeMin];
            [$prizeMinRaw, $prizeMaxRaw] = [$prizeMaxRaw, $prizeMinRaw];
        }

        $tournaments = $tournamentRepository->searchCatalog(
            $query,
            $gameId,
            $categoryId,
            $status,
            $format,
            $registrationMode,
            $dateFrom,
            $dateTo,
            $prizeMin,
            $prizeMax,
            $sort,
            150,
        );

        $tournamentIds = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = $tournament->getTournamentId();
            if (is_int($tournamentId) && $tournamentId > 0) {
                $tournamentIds[] = $tournamentId;
            }
        }

        $registeredCounts = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['PENDING', 'ACCEPTED']);
        $acceptedCounts = $tournamentTeamRepository->countByTournamentIds($tournamentIds, ['ACCEPTED']);
        $totalMatchesByTournament = $tournamentMatchRepository->countByTournamentIds($tournamentIds);
        $finishedMatchesByTournament = $tournamentMatchRepository->countFinishedByTournamentIds($tournamentIds);

        $tournamentsData = [];
        foreach ($tournaments as $tournament) {
            $tournamentId = (int) ($tournament->getTournamentId() ?? 0);
            $totalMatches = (int) ($totalMatchesByTournament[$tournamentId] ?? 0);
            $finishedMatches = (int) ($finishedMatchesByTournament[$tournamentId] ?? 0);

            $progressPercent = $totalMatches > 0
                ? (int) round(($finishedMatches / $totalMatches) * 100)
                : 0;

            $tournamentsData[] = [
                'tournament' => $tournament,
                'registered_count' => (int) ($registeredCounts[$tournamentId] ?? 0),
                'accepted_count' => (int) ($acceptedCounts[$tournamentId] ?? 0),
                'matches_total' => $totalMatches,
                'matches_finished' => $finishedMatches,
                'progress_percent' => max(0, min(100, $progressPercent)),
            ];
        }

        return $this->render('front/pages/tournaments.html.twig', [
            'tournaments_data' => $tournamentsData,
            'available_games' => $gameRepository->findAllWithCategoryOrdered(),
            'available_categories' => $categoryRepository->findAllOrdered(),
            'filters' => [
                'q' => $query,
                'game' => $gameId,
                'category' => $categoryId,
                'status' => $status,
                'format' => $format,
                'registration_mode' => $registrationMode,
                'date_from' => $dateFrom !== null ? $dateFrom->format('Y-m-d') : '',
                'date_to' => $dateTo !== null ? $dateTo->format('Y-m-d') : '',
                'prize_min' => $prizeMinRaw,
                'prize_max' => $prizeMaxRaw,
                'sort' => $sort,
            ],
            'filter_options' => [
                'statuses' => self::STATUSES,
                'formats' => self::FORMATS,
                'registration_modes' => self::REGISTRATION_MODES,
                'sorts' => self::SORTS,
            ],
        ]);
    }

    #[Route('/pages/tournaments/export/{format}', name: 'front_tournaments_export', requirements: ['format' => 'pdf|excel'], methods: ['GET'])]
    public function export(
        string $format,
        Request $request,
        TournamentRepository $tournamentRepository,
        TableExportService $tableExportService,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $gameId = $this->toPositiveInt($request->query->get('game'));
        $categoryId = $this->toPositiveInt($request->query->get('category'));
        $status = $this->sanitizeEnum((string) $request->query->get('status', ''), self::STATUSES);
        $formatValue = $this->sanitizeEnum((string) $request->query->get('format_filter', ''), self::FORMATS);
        $registrationMode = $this->sanitizeEnum((string) $request->query->get('registration_mode', ''), self::REGISTRATION_MODES);
        $sort = $this->sanitizeEnum((string) $request->query->get('sort', 'latest'), self::SORTS) ?? 'latest';

        $dateFrom = $this->parseDate(trim((string) $request->query->get('date_from', '')));
        $dateTo = $this->parseDate(trim((string) $request->query->get('date_to', '')));
        $prizeMin = $this->toFloatOrNull(trim((string) $request->query->get('prize_min', '')));
        $prizeMax = $this->toFloatOrNull(trim((string) $request->query->get('prize_max', '')));
        if ($prizeMin !== null && $prizeMax !== null && $prizeMin > $prizeMax) {
            [$prizeMin, $prizeMax] = [$prizeMax, $prizeMin];
        }

        $tournaments = $tournamentRepository->searchCatalog(
            $query,
            $gameId,
            $categoryId,
            $status,
            $formatValue,
            $registrationMode,
            $dateFrom,
            $dateTo,
            $prizeMin,
            $prizeMax,
            $sort,
            5000
        );

        $headers = ['ID', 'Titre', 'Jeu', 'Categorie', 'Status', 'Format', 'Inscription', 'Start date', 'End date', 'Prize pool'];
        $rows = [];
        foreach ($tournaments as $tournament) {
            $game = $tournament->getGameId();
            $rows[] = [
                (int) ($tournament->getTournamentId() ?? 0),
                (string) ($tournament->getTitle() ?? '-'),
                (string) ($game?->getName() ?? '-'),
                (string) ($game?->getCategoryId()?->getName() ?? '-'),
                (string) ($tournament->getStatus() ?? '-'),
                (string) ($tournament->getFormat() ?? '-'),
                (string) ($tournament->getRegistrationMode() ?? '-'),
                $tournament->getStartDate()?->format('Y-m-d') ?? '-',
                $tournament->getEndDate()?->format('Y-m-d') ?? '-',
                (string) ($tournament->getPrizePool() ?? '0'),
            ];
        }

        $timestamp = (new \DateTimeImmutable())->format('Ymd_His');
        if ($format === 'excel') {
            return $tableExportService->exportExcel('Tournois Front', $headers, $rows, sprintf('front_tournaments_%s.xlsx', $timestamp));
        }

        return $tableExportService->exportPdf('Tournois Front', $headers, $rows, sprintf('front_tournaments_%s.pdf', $timestamp));
    }

    private function toPositiveInt(mixed $value): ?int
    {
        if (!is_scalar($value)) {
            return null;
        }

        $parsed = (int) $value;

        return $parsed > 0 ? $parsed : null;
    }

    private function toFloatOrNull(string $value): ?float
    {
        $normalized = trim($value);
        if ($normalized === '') {
            return null;
        }

        if (!is_numeric($normalized)) {
            return null;
        }

        $parsed = (float) $normalized;

        return $parsed >= 0 ? $parsed : null;
    }

    private function sanitizeEnum(string $value, array $allowedValues): ?string
    {
        $normalized = strtoupper(trim($value));
        if ($normalized === '') {
            return null;
        }

        foreach ($allowedValues as $allowedValue) {
            if ($normalized === strtoupper($allowedValue)) {
                return (string) $allowedValue;
            }
        }

        return null;
    }

    private function parseDate(string $value): ?\DateTimeImmutable
    {
        $normalized = trim($value);
        if ($normalized === '') {
            return null;
        }

        $parsed = \DateTimeImmutable::createFromFormat('Y-m-d', $normalized);

        return $parsed instanceof \DateTimeImmutable ? $parsed : null;
    }
}
