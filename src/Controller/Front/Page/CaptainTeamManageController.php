<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainTeamManageController extends AbstractController
{
    #[Route('/pages/captain-team-manage', name: 'front_captain_team_manage', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-team-manage.html.twig');
    }
}
