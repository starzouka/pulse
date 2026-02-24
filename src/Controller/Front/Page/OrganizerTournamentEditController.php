<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerTournamentEditController extends AbstractController
{
    #[Route('/pages/organizer-tournament-edit', name: 'front_organizer_tournament_edit', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-tournament-edit.html.twig');
    }
}
