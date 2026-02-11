<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrdersController extends AbstractController
{
    #[Route('/admin/orders', name: 'admin_orders', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/orders.html.twig');
    }
}
