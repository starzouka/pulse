<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Message;
use App\Entity\User;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConversationController extends AbstractController
{
    #[Route('/pages/conversation/{id}', name: 'front_conversation', requirements: ['id' => '\d+'], defaults: ['id' => null], methods: ['GET', 'POST'])]
    public function index(
        ?int $id,
        Request $request,
        UserRepository $userRepository,
        MessageRepository $messageRepository,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $partnerIds = $messageRepository->findConversationPartnerIds($viewer, null, 80);
        if ($id !== null && $id !== $viewer->getUserId() && !in_array($id, $partnerIds, true)) {
            $partnerIds[] = $id;
        }
        $partners = $this->sortUsersByIds($userRepository->findByUserIds($partnerIds), $partnerIds);

        $selectedPartner = null;
        foreach ($partners as $partner) {
            if ($id !== null && $partner->getUserId() === $id) {
                $selectedPartner = $partner;
                break;
            }
        }
        if ($selectedPartner === null && $partners !== []) {
            $selectedPartner = $partners[0];
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('conversation_send', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');
                return $this->redirectToRoute('front_conversation', ['id' => $selectedPartner?->getUserId()]);
            }

            if (!$selectedPartner instanceof User || $selectedPartner->getUserId() === null) {
                $this->addFlash('error', 'Destinataire introuvable.');
                return $this->redirectToRoute('front_messages');
            }

            $body = trim((string) $request->request->get('body_text', ''));
            if ($body === '') {
                $this->addFlash('error', 'Le message est vide.');
                return $this->redirectToRoute('front_conversation', ['id' => $selectedPartner->getUserId()]);
            }

            $message = (new Message())
                ->setSenderUserId($viewer)
                ->setReceiverUserId($selectedPartner)
                ->setBodyText($body)
                ->setCreatedAt(new \DateTime())
                ->setIsRead(false)
                ->setReadAt(null)
                ->setIsDeletedBySender(false)
                ->setIsDeletedByReceiver(false);

            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('front_conversation', ['id' => $selectedPartner->getUserId()]);
        }

        $messages = [];
        if ($selectedPartner instanceof User) {
            $messages = array_reverse($messageRepository->findConversation($viewer, $selectedPartner, 250));
            $messageRepository->markConversationAsRead($viewer, $selectedPartner);
        }

        $conversations = [];
        foreach ($partners as $partner) {
            $conversations[] = [
                'partner' => $partner,
                'latest_message' => $messageRepository->findLatestBetweenUsers($viewer, $partner),
                'unread_count' => $messageRepository->countUnreadFromSender($viewer, $partner),
            ];
        }

        return $this->render('front/pages/conversation.html.twig', [
            'viewer_user' => $viewer,
            'selected_partner' => $selectedPartner,
            'conversations' => $conversations,
            'messages' => $messages,
        ]);
    }

    /**
     * @param list<User> $users
     * @param list<int> $orderedIds
     * @return list<User>
     */
    private function sortUsersByIds(array $users, array $orderedIds): array
    {
        $usersById = [];
        foreach ($users as $user) {
            $userId = $user->getUserId();
            if ($userId !== null) {
                $usersById[$userId] = $user;
            }
        }

        $sortedUsers = [];
        foreach ($orderedIds as $orderedId) {
            if (isset($usersById[$orderedId])) {
                $sortedUsers[] = $usersById[$orderedId];
                unset($usersById[$orderedId]);
            }
        }

        foreach ($usersById as $remainingUser) {
            $sortedUsers[] = $remainingUser;
        }

        return $sortedUsers;
    }
}
