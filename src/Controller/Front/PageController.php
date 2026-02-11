<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/pages', name: 'front_')]
final class PageController extends AbstractController
{
    #[Route('/about', name: 'about', defaults: ['template' => 'about'], methods: ['GET'])]
    #[Route('/captain-invite', name: 'captain_invite', defaults: ['template' => 'captain-invite'], methods: ['GET'])]
    #[Route('/captain-members', name: 'captain_members', defaults: ['template' => 'captain-members'], methods: ['GET'])]
    #[Route('/captain-orders', name: 'captain_orders', defaults: ['template' => 'captain-orders'], methods: ['GET'])]
    #[Route('/captain-product-create', name: 'captain_product_create', defaults: ['template' => 'captain-product-create'], methods: ['GET'])]
    #[Route('/captain-product-edit', name: 'captain_product_edit', defaults: ['template' => 'captain-product-edit'], methods: ['GET'])]
    #[Route('/captain-products', name: 'captain_products', defaults: ['template' => 'captain-products'], methods: ['GET'])]
    #[Route('/captain-requests', name: 'captain_requests', defaults: ['template' => 'captain-requests'], methods: ['GET'])]
    #[Route('/captain-team-create', name: 'captain_team_create', defaults: ['template' => 'captain-team-create'], methods: ['GET'])]
    #[Route('/captain-team-manage', name: 'captain_team_manage', defaults: ['template' => 'captain-team-manage'], methods: ['GET'])]
    #[Route('/captain-team-tournaments', name: 'captain_team_tournaments', defaults: ['template' => 'captain-team-tournaments'], methods: ['GET'])]
    #[Route('/captain-tournaments', name: 'captain_tournaments', defaults: ['template' => 'captain-tournaments'], methods: ['GET'])]
    #[Route('/cart', name: 'cart', defaults: ['template' => 'cart'], methods: ['GET'])]
    #[Route('/checkout', name: 'checkout', defaults: ['template' => 'checkout'], methods: ['GET'])]
    #[Route('/contact', name: 'contact', defaults: ['template' => 'contact'], methods: ['GET'])]
    #[Route('/conversation', name: 'conversation', defaults: ['template' => 'conversation'], methods: ['GET'])]
    #[Route('/dashboard', name: 'dashboard', defaults: ['template' => 'dashboard'], methods: ['GET'])]
    #[Route('/faq', name: 'faq', defaults: ['template' => 'faq'], methods: ['GET'])]
    #[Route('/feed', name: 'feed', defaults: ['template' => 'feed'], methods: ['GET'])]
    #[Route('/feed-public', name: 'feed_public', defaults: ['template' => 'feed-public'], methods: ['GET'])]
    #[Route('/forgot-password', name: 'forgot_password', defaults: ['template' => 'forgot-password'], methods: ['GET'])]
    #[Route('/friends', name: 'friends', defaults: ['template' => 'friends'], methods: ['GET'])]
    #[Route('/game-detail', name: 'game_detail', defaults: ['template' => 'game-detail'], methods: ['GET'])]
    #[Route('/games', name: 'games', defaults: ['template' => 'games'], methods: ['GET'])]
    #[Route('/login', name: 'login', defaults: ['template' => 'login'], methods: ['GET'])]
    #[Route('/match-detail', name: 'match_detail', defaults: ['template' => 'match-detail'], methods: ['GET'])]
    #[Route('/matches', name: 'matches', defaults: ['template' => 'matches'], methods: ['GET'])]
    #[Route('/messages', name: 'messages', defaults: ['template' => 'messages'], methods: ['GET'])]
    #[Route('/my-requests', name: 'my_requests', defaults: ['template' => 'my-requests'], methods: ['GET'])]
    #[Route('/my-teams', name: 'my_teams', defaults: ['template' => 'my-teams'], methods: ['GET'])]
    #[Route('/notifications', name: 'notifications', defaults: ['template' => 'notifications'], methods: ['GET'])]
    #[Route('/order-detail', name: 'order_detail', defaults: ['template' => 'order-detail'], methods: ['GET'])]
    #[Route('/orders', name: 'orders', defaults: ['template' => 'orders'], methods: ['GET'])]
    #[Route('/organizer-match-create', name: 'organizer_match_create', defaults: ['template' => 'organizer-match-create'], methods: ['GET'])]
    #[Route('/organizer-match-edit', name: 'organizer_match_edit', defaults: ['template' => 'organizer-match-edit'], methods: ['GET'])]
    #[Route('/organizer-matches', name: 'organizer_matches', defaults: ['template' => 'organizer-matches'], methods: ['GET'])]
    #[Route('/organizer-registrations', name: 'organizer_registrations', defaults: ['template' => 'organizer-registrations'], methods: ['GET'])]
    #[Route('/organizer-request-create', name: 'organizer_request_create', defaults: ['template' => 'organizer-request-create'], methods: ['GET'])]
    #[Route('/organizer-request-detail', name: 'organizer_request_detail', defaults: ['template' => 'organizer-request-detail'], methods: ['GET'])]
    #[Route('/organizer-requests', name: 'organizer_requests', defaults: ['template' => 'organizer-requests'], methods: ['GET'])]
    #[Route('/organizer-tournament-detail', name: 'organizer_tournament_detail', defaults: ['template' => 'organizer-tournament-detail'], methods: ['GET'])]
    #[Route('/organizer-tournament-edit', name: 'organizer_tournament_edit', defaults: ['template' => 'organizer-tournament-edit'], methods: ['GET'])]
    #[Route('/organizer-tournaments', name: 'organizer_tournaments', defaults: ['template' => 'organizer-tournaments'], methods: ['GET'])]
    #[Route('/password-change', name: 'password_change', defaults: ['template' => 'password-change'], methods: ['GET'])]
    #[Route('/player-profile', name: 'player_profile', defaults: ['template' => 'player-profile'], methods: ['GET'])]
    #[Route('/players', name: 'players', defaults: ['template' => 'players'], methods: ['GET'])]
    #[Route('/post-create', name: 'post_create', defaults: ['template' => 'post-create'], methods: ['GET'])]
    #[Route('/post-detail', name: 'post_detail', defaults: ['template' => 'post-detail'], methods: ['GET'])]
    #[Route('/product-detail', name: 'product_detail', defaults: ['template' => 'product-detail'], methods: ['GET'])]
    #[Route('/profile', name: 'profile', defaults: ['template' => 'profile'], methods: ['GET'])]
    #[Route('/profile-edit', name: 'profile_edit', defaults: ['template' => 'profile-edit'], methods: ['GET'])]
    #[Route('/register', name: 'register', defaults: ['template' => 'register'], methods: ['GET'])]
    #[Route('/reset-password', name: 'reset_password', defaults: ['template' => 'reset-password'], methods: ['GET'])]
    #[Route('/search', name: 'search', defaults: ['template' => 'search'], methods: ['GET'])]
    #[Route('/shop', name: 'shop', defaults: ['template' => 'shop'], methods: ['GET'])]
    #[Route('/team-detail', name: 'team_detail', defaults: ['template' => 'team-detail'], methods: ['GET'])]
    #[Route('/teams', name: 'teams', defaults: ['template' => 'teams'], methods: ['GET'])]
    #[Route('/teams-explore', name: 'teams_explore', defaults: ['template' => 'teams-explore'], methods: ['GET'])]
    #[Route('/tournament-detail', name: 'tournament_detail', defaults: ['template' => 'tournament-detail'], methods: ['GET'])]
    #[Route('/tournaments', name: 'tournaments', defaults: ['template' => 'tournaments'], methods: ['GET'])]
    public function show(string $template): Response
    {
        return $this->render(sprintf('front/pages/%s.html.twig', $template));
    }
}

