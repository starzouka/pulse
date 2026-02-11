<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentsController extends AbstractController
{
    #[Route('/pages/tournaments', name: 'front_tournaments', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/tournaments.html.twig');
    }
}
