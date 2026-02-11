<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OrganizerRegistrationsController extends AbstractController
{
    #[Route('/pages/organizer-registrations', name: 'front_organizer_registrations', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/organizer-registrations.html.twig');
    }
}
