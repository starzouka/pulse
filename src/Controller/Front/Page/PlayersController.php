<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\FriendRequestRepository;
use App\Repository\FriendshipRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PlayersController extends AbstractController
{
    #[Route('/pages/players', name: 'front_players', methods: ['GET'])]
    public function index(
        Request $request,
        UserRepository $userRepository,
        FriendshipRepository $friendshipRepository,
        FriendRequestRepository $friendRequestRepository,
    ): Response
    {
        $viewer = $this->getUser();
        $viewerUser = $viewer instanceof User ? $viewer : null;

        $query = trim((string) $request->query->get('q', ''));
        $role = trim((string) $request->query->get('role', ''));
        $country = trim((string) $request->query->get('country', ''));

        $players = $userRepository->searchUsers($viewerUser, $query, $role, $country, 30);

        $playerCards = [];
        foreach ($players as $player) {
            $friendStatus = 'guest';
            if ($viewerUser instanceof User) {
                if ($friendshipRepository->existsBetweenUsers($viewerUser, $player)) {
                    $friendStatus = 'friends';
                } else {
                    $pendingRequest = $friendRequestRepository->findPendingBetweenUsers($viewerUser, $player);
                    if ($pendingRequest !== null && $pendingRequest->getFromUserId() instanceof User) {
                        $friendStatus = $pendingRequest->getFromUserId()?->getUserId() === $viewerUser->getUserId()
                            ? 'request_sent'
                            : 'request_received';
                    } else {
                        $friendStatus = 'none';
                    }
                }
            }

            $playerCards[] = [
                'user' => $player,
                'friend_status' => $friendStatus,
            ];
        }

        return $this->render('front/pages/players.html.twig', [
            'viewer_user' => $viewerUser,
            'player_cards' => $playerCards,
            'filters' => [
                'q' => $query,
                'role' => strtoupper($role),
                'country' => strtoupper($country),
            ],
        ]);
    }
}
