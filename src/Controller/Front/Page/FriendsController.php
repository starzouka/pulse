<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Friendship;
use App\Entity\User;
use App\Repository\FriendRequestRepository;
use App\Repository\FriendshipRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FriendsController extends AbstractController
{
    #[Route('/pages/friends', name: 'front_friends', methods: ['GET'])]
    public function index(
        Request $request,
        FriendshipRepository $friendshipRepository,
        FriendRequestRepository $friendRequestRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $friendships = $friendshipRepository->findByUser($viewer, 100);
        $friends = [];
        foreach ($friendships as $friendship) {
            $userOne = $friendship->getUserId1();
            $userTwo = $friendship->getUserId2();
            if (!$userOne instanceof User || !$userTwo instanceof User) {
                continue;
            }

            $friend = $userOne->getUserId() === $viewer->getUserId() ? $userTwo : $userOne;
            $friendId = $friend->getUserId();
            if ($friendId === null) {
                continue;
            }

            $friends[$friendId] = $friend;
        }

        return $this->render('front/pages/friends.html.twig', [
            'viewer_user' => $viewer,
            'friends' => array_values($friends),
            'received_requests' => $friendRequestRepository->findLatestReceivedByUser($viewer, 100),
            'sent_requests' => $friendRequestRepository->findLatestSentByUser($viewer, 100),
        ]);
    }

    #[Route('/pages/friends/requests/{id}/accept', name: 'front_friends_request_accept', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function acceptRequest(
        int $id,
        Request $request,
        FriendRequestRepository $friendRequestRepository,
        FriendshipRepository $friendshipRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('friend_request_accept_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_friends');
        }

        $friendRequest = $friendRequestRepository->findOnePendingReceivedById($viewer, $id);
        if ($friendRequest === null) {
            $this->addFlash('error', 'Demande introuvable.');
            return $this->redirectToRoute('front_friends');
        }

        $sender = $friendRequest->getFromUserId();
        if (!$sender instanceof User) {
            $this->addFlash('error', 'Expediteur introuvable.');
            return $this->redirectToRoute('front_friends');
        }

        if (!$friendshipRepository->existsBetweenUsers($viewer, $sender)) {
            $friendship = $this->createFriendship($viewer, $sender);
            $entityManager->persist($friendship);
        }

        $friendRequest
            ->setStatus('ACCEPTED')
            ->setRespondedAt(new \DateTime());

        $entityManager->flush();

        $this->addFlash('success', 'Demande acceptee.');

        return $this->redirectToRoute('front_friends');
    }

    #[Route('/pages/friends/requests/{id}/refuse', name: 'front_friends_request_refuse', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function refuseRequest(
        int $id,
        Request $request,
        FriendRequestRepository $friendRequestRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('friend_request_refuse_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_friends');
        }

        $friendRequest = $friendRequestRepository->findOnePendingReceivedById($viewer, $id);
        if ($friendRequest === null) {
            $this->addFlash('error', 'Demande introuvable.');
            return $this->redirectToRoute('front_friends');
        }

        $friendRequest
            ->setStatus('REFUSED')
            ->setRespondedAt(new \DateTime());
        $entityManager->flush();

        $this->addFlash('success', 'Demande refusee.');

        return $this->redirectToRoute('front_friends');
    }

    #[Route('/pages/friends/requests/{id}/cancel', name: 'front_friends_request_cancel', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function cancelRequest(
        int $id,
        Request $request,
        FriendRequestRepository $friendRequestRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('friend_request_cancel_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_friends');
        }

        $friendRequest = $friendRequestRepository->findOnePendingSentById($viewer, $id);
        if ($friendRequest === null) {
            $this->addFlash('error', 'Demande introuvable.');
            return $this->redirectToRoute('front_friends');
        }

        $friendRequest
            ->setStatus('CANCELLED')
            ->setRespondedAt(new \DateTime());
        $entityManager->flush();

        $this->addFlash('success', 'Demande annulee.');

        return $this->redirectToRoute('front_friends');
    }

    private function createFriendship(User $userA, User $userB): Friendship
    {
        $userAId = $userA->getUserId() ?? 0;
        $userBId = $userB->getUserId() ?? 0;

        $friendship = new Friendship();
        if ($userAId < $userBId) {
            $friendship->setUserId1($userA)->setUserId2($userB);
        } else {
            $friendship->setUserId1($userB)->setUserId2($userA);
        }

        return $friendship->setCreatedAt(new \DateTime());
    }
}
