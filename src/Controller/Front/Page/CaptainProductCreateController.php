<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainProductCreateController extends AbstractController
{
    #[Route('/pages/captain-product-create', name: 'front_captain_product_create', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-product-create.html.twig');
    }
}
