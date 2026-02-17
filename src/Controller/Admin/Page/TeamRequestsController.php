<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamRequestsController extends AbstractController
{
    #[Route('/admin/team-requests', name: 'admin_team_requests', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/team-requests.html.twig');
    }
}
