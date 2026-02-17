<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\TournamentMatch;
use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchDetailController extends AbstractController
{
    #[Route('/pages/match-detail/{id}', name: 'front_match_detail', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET'])]
    public function index(
        ?int $id,
        Request $request,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
    ): Response {
        $matchId = $id;
        if ($matchId === null) {
            $queryId = (int) $request->query->get('id', 0);
            if ($queryId > 0) {
                $matchId = $queryId;
            }
        }

        $match = $matchId !== null
            ? $tournamentMatchRepository->findOneWithContextById($matchId)
            : $tournamentMatchRepository->findLatestWithContext();

        if (!$match instanceof TournamentMatch) {
            throw $this->createNotFoundException('Match introuvable.');
        }

        $teams = $matchTeamRepository->findByMatchWithTeam($match);

        $winnerTeamNames = [];
        foreach ($teams as $relation) {
            if ($relation->isWinner() !== true) {
                continue;
            }

            $winnerName = $relation->getTeamId()?->getName();
            if (is_string($winnerName) && $winnerName !== '') {
                $winnerTeamNames[] = $winnerName;
            }
        }

        $teamsLabel = [];
        foreach ($teams as $relation) {
            $teamName = $relation->getTeamId()?->getName();
            if (is_string($teamName) && $teamName !== '') {
                $teamsLabel[] = $teamName;
            }
        }

        return $this->render('front/pages/match-detail.html.twig', [
            'match' => $match,
            'tournament' => $match->getTournamentId(),
            'game' => $match->getTournamentId()?->getGameId(),
            'match_teams' => $teams,
            'match_label' => $teamsLabel !== [] ? implode(' vs ', $teamsLabel) : 'Match',
            'winner_team_names' => $winnerTeamNames,
        ]);
    }
}
