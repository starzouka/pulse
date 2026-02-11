<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/admin', name: 'admin_dashboard', methods: ['GET'])]
    #[Route('/admin/dashboard', name: 'admin_dashboard_page', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }
}
