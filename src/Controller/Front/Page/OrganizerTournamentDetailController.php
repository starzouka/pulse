<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerTournamentDetailController extends AbstractController
{
    #[Route('/pages/organizer-tournament-detail', name: 'front_organizer_tournament_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-tournament-detail.html.twig');
    }
}
