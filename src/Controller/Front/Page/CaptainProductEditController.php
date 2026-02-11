<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainProductEditController extends AbstractController
{
    #[Route('/pages/captain-product-edit', name: 'front_captain_product_edit', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-product-edit.html.twig');
    }
}
