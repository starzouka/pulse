<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchTeamsController extends AbstractController
{
    #[Route('/admin/match-teams', name: 'admin_match_teams', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/match-teams.html.twig');
    }
}
