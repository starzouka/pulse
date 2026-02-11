<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ShopController extends AbstractController
{
    #[Route('/pages/shop', name: 'front_shop', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/shop.html.twig');
    }
}
