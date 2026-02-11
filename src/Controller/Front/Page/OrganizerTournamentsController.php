<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerTournamentsController extends AbstractController
{
    #[Route('/pages/organizer-tournaments', name: 'front_organizer_tournaments', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-tournaments.html.twig');
    }
}
