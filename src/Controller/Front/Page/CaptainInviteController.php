<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainInviteController extends AbstractController
{
    #[Route('/pages/captain-invite', name: 'front_captain_invite', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-invite.html.twig');
    }
}
