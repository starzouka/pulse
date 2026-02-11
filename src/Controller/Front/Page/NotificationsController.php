<?php

namespace App\Controller\Front\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NotificationsController extends AbstractController
{
    #[Route('/pages/notifications', name: 'front_notifications', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('front/pages/notifications.html.twig');
    }
}
