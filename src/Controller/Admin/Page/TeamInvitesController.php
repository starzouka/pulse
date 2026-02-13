<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TeamInvitesController extends AbstractController
{
    #[Route('/admin/team-invites', name: 'admin_team_invites', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/team-invites.html.twig');
    }
}
