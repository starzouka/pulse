<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchDetailController extends AbstractController
{
    #[Route('/pages/match-detail', name: 'front_match_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/match-detail.html.twig');
    }
}
