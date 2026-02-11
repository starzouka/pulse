<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamsController extends AbstractController
{
    #[Route('/pages/teams', name: 'front_teams', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/teams.html.twig');
    }
}
