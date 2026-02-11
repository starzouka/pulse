<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CheckoutController extends AbstractController
{
    #[Route('/pages/checkout', name: 'front_checkout', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/checkout.html.twig');
    }
}
