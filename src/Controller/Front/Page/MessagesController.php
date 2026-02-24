<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessagesController extends AbstractController
{
    use PaginatesCollectionsTrait;

    #[Route('/pages/messages', name: 'front_messages', methods: ['GET'])]
    public function index(
        Request $request,
        MessageRepository $messageRepository,
        UserRepository $userRepository,
    ): Response
    {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $search = trim((string) $request->query->get('q', ''));
        $sort = strtolower(trim((string) $request->query->get('sort', 'latest')));
        if (!in_array($sort, ['latest', 'oldest', 'unread'], true)) {
            $sort = 'latest';
        }
        $onlyUnread = $request->query->getBoolean('unread');
        $requestedPartnerId = (int) $request->query->get('with', 0);

        $partnerIds = $messageRepository->findConversationPartnerIds($viewer, $search, 500, $sort, $onlyUnread);
        if ($requestedPartnerId > 0 && $requestedPartnerId !== $viewer->getUserId() && !in_array($requestedPartnerId, $partnerIds, true)) {
            $partnerIds[] = $requestedPartnerId;
        }

        $partners = $this->sortUsersByIds($userRepository->findByUserIds($partnerIds), $partnerIds);
        $pagination = $this->paginateItems($partners, $this->readPage($request), 12);
        $partnersForSidebar = $pagination['items'];

        $selectedPartner = null;
        foreach ($partners as $partner) {
            if ($requestedPartnerId > 0 && $partner->getUserId() === $requestedPartnerId) {
                $selectedPartner = $partner;
                break;
            }
        }
        if ($selectedPartner === null && $partnersForSidebar !== []) {
            $selectedPartner = $partnersForSidebar[0];
        }

        $previewMessages = [];
        if ($selectedPartner instanceof User) {
            $previewMessages = array_reverse($messageRepository->findConversation($viewer, $selectedPartner, 12));
            $messageRepository->markConversationAsRead($viewer, $selectedPartner);
        }

        $conversations = [];
        foreach ($partnersForSidebar as $partner) {
            $latestMessage = $messageRepository->findLatestBetweenUsers($viewer, $partner);
            $conversations[] = [
                'partner' => $partner,
                'latest_message' => $latestMessage,
                'unread_count' => $messageRepository->countUnreadFromSender($viewer, $partner),
            ];
        }

        return $this->render('front/pages/messages.html.twig', [
            'viewer_user' => $viewer,
            'conversations' => $conversations,
            'pagination' => $pagination,
            'selected_partner' => $selectedPartner,
            'preview_messages' => $previewMessages,
            'search' => $search,
            'filters' => [
                'q' => $search,
                'sort' => $sort,
                'unread' => $onlyUnread,
            ],
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
