<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FeedController extends AbstractController
{
    #[Route('/pages/feed', name: 'front_feed', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/feed.html.twig');
    }
}
