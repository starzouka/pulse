<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrderDetailController extends AbstractController
{
    #[Route('/admin/order-detail', name: 'admin_order_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/order-detail.html.twig');
    }
}
