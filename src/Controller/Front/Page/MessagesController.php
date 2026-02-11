<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessagesController extends AbstractController
{
    #[Route('/pages/messages', name: 'front_messages', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/messages.html.twig');
    }
}
