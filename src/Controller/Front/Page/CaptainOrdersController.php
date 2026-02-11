<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainOrdersController extends AbstractController
{
    #[Route('/pages/captain-orders', name: 'front_captain_orders', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-orders.html.twig');
    }
}
