<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamsController extends AbstractController
{
    #[Route('/admin/teams', name: 'admin_teams', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/teams.html.twig');
    }
}
