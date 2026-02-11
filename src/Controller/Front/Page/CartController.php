<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CartController extends AbstractController
{
    #[Route('/pages/cart', name: 'front_cart', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/cart.html.twig');
    }
}
