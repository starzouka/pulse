<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamDetailController extends AbstractController
{
    #[Route('/admin/team-detail', name: 'admin_team_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/team-detail.html.twig');
    }
}
