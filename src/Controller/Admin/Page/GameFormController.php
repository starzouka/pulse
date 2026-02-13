<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameFormController extends AbstractController
{
    #[Route('/admin/game-form', name: 'admin_game_form', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/game-form.html.twig');
    }
}
