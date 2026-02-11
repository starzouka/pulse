<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FeedPublicController extends AbstractController
{
    #[Route('/pages/feed-public', name: 'front_feed_public', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/feed-public.html.twig');
    }
}
