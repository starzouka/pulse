<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TournamentsController extends AbstractController
{
    #[Route('/admin/tournaments', name: 'admin_tournaments', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/tournaments.html.twig');
    }
}
