<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrdersController extends AbstractController
{
    #[Route('/pages/orders', name: 'front_orders', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/orders.html.twig');
    }
}
