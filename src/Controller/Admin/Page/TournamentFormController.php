<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentFormController extends AbstractController
{
    #[Route('/admin/tournament-form', name: 'admin_tournament_form', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/tournament-form.html.twig');
    }
}
