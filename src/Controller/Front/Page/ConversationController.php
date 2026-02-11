<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConversationController extends AbstractController
{
    #[Route('/pages/conversation', name: 'front_conversation', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/conversation.html.twig');
    }
}
