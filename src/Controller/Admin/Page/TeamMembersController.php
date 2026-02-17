<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamMembersController extends AbstractController
{
    #[Route('/admin/team-members', name: 'admin_team_members', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/team-members.html.twig');
    }
}
