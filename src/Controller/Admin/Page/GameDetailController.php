<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameDetailController extends AbstractController
{
    #[Route('/admin/game-detail', name: 'admin_game_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/game-detail.html.twig');
    }
}
