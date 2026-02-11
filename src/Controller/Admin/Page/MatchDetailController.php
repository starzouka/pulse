<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MatchDetailController extends AbstractController
{
    #[Route('/admin/match-detail', name: 'admin_match_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/match-detail.html.twig');
    }
}
