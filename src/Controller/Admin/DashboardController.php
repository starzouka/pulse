<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin', name: 'admin_')]
final class DashboardController extends AbstractController
{
    #[Route('', name: 'dashboard', methods: ['GET'])]
    #[Route('/dashboard', name: 'dashboard_page', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

    #[Route('/add-user', name: 'add_user', methods: ['GET'])]
    public function addUser(): Response
    {
        return $this->render('admin/add-user.html.twig');
    }

    #[Route('/carts', name: 'carts', defaults: ['template' => 'carts'], methods: ['GET'])]
    #[Route('/categories', name: 'categories', defaults: ['template' => 'categories'], methods: ['GET'])]
    #[Route('/category-form', name: 'category_form', defaults: ['template' => 'category-form'], methods: ['GET'])]
    #[Route('/comments', name: 'comments', defaults: ['template' => 'comments'], methods: ['GET'])]
    #[Route('/game-detail', name: 'game_detail', defaults: ['template' => 'game-detail'], methods: ['GET'])]
    #[Route('/game-form', name: 'game_form', defaults: ['template' => 'game-form'], methods: ['GET'])]
    #[Route('/games', name: 'games', defaults: ['template' => 'games'], methods: ['GET'])]
    #[Route('/images', name: 'images', defaults: ['template' => 'images'], methods: ['GET'])]
    #[Route('/match-detail', name: 'match_detail', defaults: ['template' => 'match-detail'], methods: ['GET'])]
    #[Route('/matches', name: 'matches', defaults: ['template' => 'matches'], methods: ['GET'])]
    #[Route('/match-teams', name: 'match_teams', defaults: ['template' => 'match-teams'], methods: ['GET'])]
    #[Route('/messages', name: 'messages', defaults: ['template' => 'messages'], methods: ['GET'])]
    #[Route('/notifications', name: 'notifications', defaults: ['template' => 'notifications'], methods: ['GET'])]
    #[Route('/order-detail', name: 'order_detail', defaults: ['template' => 'order-detail'], methods: ['GET'])]
    #[Route('/orders', name: 'orders', defaults: ['template' => 'orders'], methods: ['GET'])]
    #[Route('/post-detail', name: 'post_detail', defaults: ['template' => 'post-detail'], methods: ['GET'])]
    #[Route('/posts', name: 'posts', defaults: ['template' => 'posts'], methods: ['GET'])]
    #[Route('/product-detail', name: 'product_detail', defaults: ['template' => 'product-detail'], methods: ['GET'])]
    #[Route('/product-form', name: 'product_form', defaults: ['template' => 'product-form'], methods: ['GET'])]
    #[Route('/products', name: 'products', defaults: ['template' => 'products'], methods: ['GET'])]
    #[Route('/report-detail', name: 'report_detail', defaults: ['template' => 'report-detail'], methods: ['GET'])]
    #[Route('/reports', name: 'reports', defaults: ['template' => 'reports'], methods: ['GET'])]
    #[Route('/team-detail', name: 'team_detail', defaults: ['template' => 'team-detail'], methods: ['GET'])]
    #[Route('/team-invites', name: 'team_invites', defaults: ['template' => 'team-invites'], methods: ['GET'])]
    #[Route('/team-members', name: 'team_members', defaults: ['template' => 'team-members'], methods: ['GET'])]
    #[Route('/team-requests', name: 'team_requests', defaults: ['template' => 'team-requests'], methods: ['GET'])]
    #[Route('/teams', name: 'teams', defaults: ['template' => 'teams'], methods: ['GET'])]
    #[Route('/tournament-detail', name: 'tournament_detail', defaults: ['template' => 'tournament-detail'], methods: ['GET'])]
    #[Route('/tournament-form', name: 'tournament_form', defaults: ['template' => 'tournament-form'], methods: ['GET'])]
    #[Route('/tournament-request-detail', name: 'tournament_request_detail', defaults: ['template' => 'tournament-request-detail'], methods: ['GET'])]
    #[Route('/tournament-requests', name: 'tournament_requests', defaults: ['template' => 'tournament-requests'], methods: ['GET'])]
    #[Route('/tournaments', name: 'tournaments', defaults: ['template' => 'tournaments'], methods: ['GET'])]
    #[Route('/tournament-teams', name: 'tournament_teams', defaults: ['template' => 'tournament-teams'], methods: ['GET'])]
    #[Route('/user-create', name: 'user_create', defaults: ['template' => 'user-create'], methods: ['GET'])]
    #[Route('/user-detail', name: 'user_detail', defaults: ['template' => 'user-detail'], methods: ['GET'])]
    #[Route('/user-edit', name: 'user_edit', defaults: ['template' => 'user-edit'], methods: ['GET'])]
    #[Route('/users', name: 'users', defaults: ['template' => 'users'], methods: ['GET'])]
    public function page(string $template): Response
    {
        return $this->render(sprintf('admin/pages/%s.html.twig', $template));
    }
}

