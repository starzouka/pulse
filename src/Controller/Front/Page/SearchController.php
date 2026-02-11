<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SearchController extends AbstractController
{
    #[Route('/pages/search', name: 'front_search', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/search.html.twig');
    }
}
