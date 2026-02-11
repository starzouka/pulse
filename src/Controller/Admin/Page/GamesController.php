<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GamesController extends AbstractController
{
    #[Route('/admin/games', name: 'admin_games', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/games.html.twig');
    }
}
