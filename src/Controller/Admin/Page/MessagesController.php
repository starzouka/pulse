<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessagesController extends AbstractController
{
    #[Route('/admin/messages', name: 'admin_messages', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/messages.html.twig');
    }
}
