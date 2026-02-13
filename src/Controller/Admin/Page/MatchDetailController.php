<?php

declare(strict_types=1);

namespace App\Controller\Admin\Page;

use App\Entity\TournamentMatch;
use App\Repository\MatchTeamRepository;
use App\Repository\TournamentMatchRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchDetailController extends AbstractController
{
    #[Route('/admin/match-detail/{id}', name: 'admin_match_detail', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function index(
        int $id,
        TournamentMatchRepository $tournamentMatchRepository,
        MatchTeamRepository $matchTeamRepository,
    ): Response {
        $match = $tournamentMatchRepository->findOneWithContextById($id);
        if (!$match instanceof TournamentMatch) {
            throw $this->createNotFoundException('Match introuvable.');
        }

        $matchTeams = $matchTeamRepository->findByMatchWithTeam($match);

        return $this->render('admin/pages/match-detail.html.twig', [
            'match' => $match,
            'matchTeams' => $matchTeams,
        ]);
    }

    #[Route('/admin/match-detail', name: 'admin_match_detail_legacy', methods: ['GET'])]
    public function legacy(Request $request): Response
    {
        $id = $request->query->getInt('id', 0);
        if ($id > 0) {
            return $this->redirectToRoute('admin_match_detail', ['id' => $id]);
        }

        return $this->redirectToRoute('admin_matches');
    }
}

