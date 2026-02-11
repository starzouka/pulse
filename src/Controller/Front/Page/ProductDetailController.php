<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductDetailController extends AbstractController
{
    #[Route('/pages/product-detail', name: 'front_product_detail', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/product-detail.html.twig');
    }
}
