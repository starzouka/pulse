<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ImagesController extends AbstractController
{
    #[Route('/admin/images', name: 'admin_images', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/images.html.twig');
    }
}
