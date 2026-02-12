<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Repository\ProductRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\TeamRepository;
use App\Repository\TournamentTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamsController extends AbstractController
{
    use PaginatesCollectionsTrait;

    #[Route('/pages/teams', name: 'front_teams', methods: ['GET'])]
    public function index(
        Request $request,
        TeamRepository $teamRepository,
        TeamMemberRepository $teamMemberRepository,
        ProductRepository $productRepository,
        TournamentTeamRepository $tournamentTeamRepository,
    ): Response {
        $query = trim((string) $request->query->get('q', ''));
        $region = trim((string) $request->query->get('region', ''));
        $withProducts = $request->query->getBoolean('products');
        $activeInTournaments = $request->query->getBoolean('active_tournaments');

        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        if (!in_array($sort, ['latest', 'oldest', 'name', 'region', 'popular'], true)) {
            $sort = 'latest';
        }

        $repositorySort = $sort === 'popular' ? 'latest' : $sort;
        $teams = $teamRepository->searchCatalog(
            $query !== '' ? $query : null,
            $region !== '' ? $region : null,
            $withProducts,
            $activeInTournaments,
            $repositorySort,
            180
        );

        $teamIds = [];
        foreach ($teams as $team) {
            $teamId = $team->getTeamId();
            if ($teamId !== null) {
                $teamIds[] = $teamId;
            }
        }

        $membersCountByTeamId = $teamMemberRepository->countActiveByTeamIds($teamIds);
        $productsCountByTeamId = $productRepository->countByTeamIds($teamIds, true);
        $activeTournamentsCountByTeamId = $tournamentTeamRepository->countByTeamIds($teamIds, ['PENDING', 'ACCEPTED']);

        if ($sort === 'popular') {
            usort($teams, static function ($leftTeam, $rightTeam) use (
                $activeTournamentsCountByTeamId,
                $productsCountByTeamId,
                $membersCountByTeamId
            ): int {
                $leftId = $leftTeam->getTeamId() ?? 0;
                $rightId = $rightTeam->getTeamId() ?? 0;

                $leftActiveTournaments = $activeTournamentsCountByTeamId[$leftId] ?? 0;
                $rightActiveTournaments = $activeTournamentsCountByTeamId[$rightId] ?? 0;
                if ($leftActiveTournaments !== $rightActiveTournaments) {
                    return $rightActiveTournaments <=> $leftActiveTournaments;
                }

                $leftProducts = $productsCountByTeamId[$leftId] ?? 0;
                $rightProducts = $productsCountByTeamId[$rightId] ?? 0;
                if ($leftProducts !== $rightProducts) {
                    return $rightProducts <=> $leftProducts;
                }

                $leftMembers = $membersCountByTeamId[$leftId] ?? 0;
                $rightMembers = $membersCountByTeamId[$rightId] ?? 0;
                if ($leftMembers !== $rightMembers) {
                    return $rightMembers <=> $leftMembers;
                }

                return strcasecmp((string) $leftTeam->getName(), (string) $rightTeam->getName());
            });
        }

        $pagination = $this->paginateItems($teams, $this->readPage($request), 12);
        $teams = $pagination['items'];

        $teamIds = [];
        foreach ($teams as $team) {
            $teamId = $team->getTeamId();
            if ($teamId !== null) {
                $teamIds[] = $teamId;
            }
        }

        $membersCountByTeamId = $teamMemberRepository->countActiveByTeamIds($teamIds);
        $productsCountByTeamId = $productRepository->countByTeamIds($teamIds, true);
        $activeTournamentsCountByTeamId = $tournamentTeamRepository->countByTeamIds($teamIds, ['PENDING', 'ACCEPTED']);

        return $this->render('front/pages/teams.html.twig', [
            'teams' => $teams,
            'regions' => $teamRepository->findDistinctRegions(),
            'members_count_by_team_id' => $membersCountByTeamId,
            'products_count_by_team_id' => $productsCountByTeamId,
            'active_tournaments_count_by_team_id' => $activeTournamentsCountByTeamId,
            'pagination' => $pagination,
            'filters' => [
                'q' => $query,
                'region' => $region,
                'products' => $withProducts,
                'active_tournaments' => $activeInTournaments,
                'sort' => $sort,
            ],
        ]);
    }
}
