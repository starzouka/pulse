<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrderDetailController extends AbstractController
{
    #[Route('/pages/order-detail', name: 'front_order_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/order-detail.html.twig');
    }
}
