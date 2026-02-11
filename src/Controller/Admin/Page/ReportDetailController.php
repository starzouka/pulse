<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReportDetailController extends AbstractController
{
    #[Route('/admin/report-detail', name: 'admin_report_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/report-detail.html.twig');
    }
}
