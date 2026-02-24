<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/pages/contact', name: 'front_contact', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/contact.html.twig');
    }
}
