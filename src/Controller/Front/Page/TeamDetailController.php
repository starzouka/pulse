<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamDetailController extends AbstractController
{
    #[Route('/pages/team-detail', name: 'front_team_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/team-detail.html.twig');
    }
}
