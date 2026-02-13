<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FaqController extends AbstractController
{
    #[Route('/pages/faq', name: 'front_faq', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/faq.html.twig');
    }
}
