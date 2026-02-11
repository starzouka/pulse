<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainMembersController extends AbstractController
{
    #[Route('/pages/captain-members', name: 'front_captain_members', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/captain-members.html.twig');
    }
}
