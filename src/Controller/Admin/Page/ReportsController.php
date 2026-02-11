<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReportsController extends AbstractController
{
    #[Route('/admin/reports', name: 'admin_reports', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/reports.html.twig');
    }
}
