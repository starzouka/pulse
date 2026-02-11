<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainTournamentsController extends AbstractController
{
    #[Route('/pages/captain-tournaments', name: 'front_captain_tournaments', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-tournaments.html.twig');
    }
}
