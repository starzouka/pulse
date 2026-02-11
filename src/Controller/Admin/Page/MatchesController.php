<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchesController extends AbstractController
{
    #[Route('/admin/matches', name: 'admin_matches', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/matches.html.twig');
    }
}
