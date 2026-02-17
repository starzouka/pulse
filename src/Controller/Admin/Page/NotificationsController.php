<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NotificationsController extends AbstractController
{
    #[Route('/admin/notifications', name: 'admin_notifications', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/notifications.html.twig');
    }
}
