<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainProductsController extends AbstractController
{
    #[Route('/pages/captain-products', name: 'front_captain_products', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-products.html.twig');
    }
}
