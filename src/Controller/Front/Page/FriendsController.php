<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FriendsController extends AbstractController
{
    #[Route('/pages/friends', name: 'front_friends', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/friends.html.twig');
    }
}
