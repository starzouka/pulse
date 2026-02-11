<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchesController extends AbstractController
{
    #[Route('/pages/matches', name: 'front_matches', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/matches.html.twig');
    }
}
