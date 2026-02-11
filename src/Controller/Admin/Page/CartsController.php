<?php

namespace App\Controller\Admin\Page;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CartsController extends AbstractController
{
    #[Route('/admin/carts', name: 'admin_carts', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/pages/carts.html.twig');
    }
}
