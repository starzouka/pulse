<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainTeamTournamentsController extends AbstractController
{
    #[Route('/pages/captain-team-tournaments', name: 'front_captain_team_tournaments', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $team = $request->query->get('team');
        $routeParameters = [];
        if (is_scalar($team) && (int) $team > 0) {
            $routeParameters['team'] = (int) $team;
        }

        return $this->redirectToRoute('front_captain_tournaments', $routeParameters);
    }
}
