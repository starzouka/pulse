<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamInvite;
use App\Entity\User;
use App\Repository\TeamInviteRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\UserRepository;
use App\Service\Captain\CaptainTeamContextProvider;
use App\Service\Captain\RosterManager;
use App\Service\Ai\InvitationMessageAssistant;
use App\Service\Ai\MessageModerationService;
use App\Service\Realtime\RealtimeNotifier;
use App\Service\Security\GoogleRecaptchaVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CaptainInviteController extends AbstractController
{
    #[Route('/pages/captain-invite', name: 'front_captain_invite', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamInviteRepository $teamInviteRepository,
        TeamMemberRepository $teamMemberRepository,
        UserRepository $userRepository,
        MessageModerationService $messageModerationService,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        $requestedTeamId = $this->toPositiveInt($request->query->get('team'));
        $context = $captainTeamContextProvider->resolve($viewer, $requestedTeamId);
        $captainTeams = $context['teams'];
        $activeTeam = $context['active_team'];

        if (!$activeTeam instanceof Team) {
            $this->addFlash('info', "Vous n'avez pas encore d'equipe. Creez-en une.");

            return $this->redirectToRoute('front_captain_team_manage', [
                'mode' => 'create',
            ]);
        }

        $searchQuery = trim((string) $request->query->get('q', ''));
        $latestInvites = $teamInviteRepository->findLatestByTeam($activeTeam, 120);

        $searchResults = [];
        if ($searchQuery !== '') {
            $memberUserIds = $teamMemberRepository->findActiveUserIdsByTeam($activeTeam);
            $pendingInvitedUserIds = $teamInviteRepository->findPendingInvitedUserIdsByTeam($activeTeam);

            $blockedUserIds = array_values(array_unique(array_merge(
                $memberUserIds,
                $pendingInvitedUserIds,
                [$viewer->getUserId() ?? 0],
            )));

            $candidates = $userRepository->searchUsers($viewer, $searchQuery, null, null, 40);
            foreach ($candidates as $candidate) {
                $candidateUserId = $candidate->getUserId();
                if ($candidateUserId === null || in_array($candidateUserId, $blockedUserIds, true)) {
                    continue;
                }

                $searchResults[] = $candidate;
            }
        }

        return $this->render('front/pages/captain-invite.html.twig', [
            'viewer_user' => $viewer,
            'captain_teams' => $captainTeams,
            'active_team' => $activeTeam,
            'search_query' => $searchQuery,
            'search_results' => $searchResults,
            'latest_invites' => $latestInvites,
            'spam_terms_examples' => array_slice($messageModerationService->getSpamTerms(), 0, 8),
            'toxic_terms_examples' => array_slice($messageModerationService->getToxicTerms(), 0, 8),
            'google_recaptcha_site_key' => trim((string) ($_ENV['GOOGLE_RECAPTCHA_SITE_KEY'] ?? $_SERVER['GOOGLE_RECAPTCHA_SITE_KEY'] ?? '')),
        ]);
    }

    #[Route('/pages/captain-invite/send', name: 'front_captain_invite_send', methods: ['POST'])]
    public function send(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamInviteRepository $teamInviteRepository,
        TeamMemberRepository $teamMemberRepository,
        UserRepository $userRepository,
        RosterManager $rosterManager,
        InvitationMessageAssistant $invitationMessageAssistant,
        MessageModerationService $messageModerationService,
        RealtimeNotifier $realtimeNotifier,
        GoogleRecaptchaVerifier $googleRecaptchaVerifier,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_invite_send', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_invite');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $invitedUserId = (int) $request->request->get('invited_user_id', 0);
        $message = $this->normalizeNullableText($request->request->get('message'));
        $useAiMessage = (string) $request->request->get('use_ai_message', '') === '1';

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $invitedUser = $userRepository->find($invitedUserId);
        if (!$invitedUser instanceof User) {
            $this->addFlash('error', 'Utilisateur introuvable.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
        }

        if ($invitedUser->getUserId() === $viewer->getUserId()) {
            $this->addFlash('error', "Vous ne pouvez pas vous inviter vous-meme.");

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
        }
        $recaptcha = $googleRecaptchaVerifier->verifyRequest($request, 'captain_invite_send');
        if (!$recaptcha['success']) {
            $this->addFlash('error', 'reCAPTCHA: ' . ($recaptcha['message'] ?? 'validation échouée.'));

            return $this->redirectToRoute('front_captain_invite');
        }

        $rosterCapacity = $rosterManager->validateAddActiveMember($team);
        if (!$rosterCapacity['ok']) {
            $this->addFlash('error', $rosterCapacity['message']);

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
        }

        $activeMembership = $teamMemberRepository->findOneByTeamAndUser($team, $invitedUser);
        if ($activeMembership !== null && $activeMembership->isActive()) {
            $this->addFlash('error', 'Ce joueur est deja membre de cette equipe.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
        }

        $pendingInvite = $teamInviteRepository->findOnePendingByTeamAndUser($team, $invitedUser);
        if ($pendingInvite instanceof TeamInvite) {
            $this->addFlash('info', 'Une invitation en attente existe deja pour ce joueur.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
        }

        if ($useAiMessage && $message === null) {
            $message = $invitationMessageAssistant->generateTeamInviteMessage($team, $viewer, $invitedUser);
        }

        if ($message !== null) {
            $moderation = $messageModerationService->analyze($message);
            if (!$moderation['is_allowed']) {
                $details = array_filter([
                    $moderation['spam_matches'] !== [] ? 'spam: ' . implode(', ', $moderation['spam_matches']) : null,
                    $moderation['toxic_matches'] !== [] ? 'toxicité: ' . implode(', ', $moderation['toxic_matches']) : null,
                ]);
                $this->addFlash('error', 'Invitation bloquée par modération (' . implode(' | ', $details) . ').');

                return $this->redirectToRoute('front_captain_invite', ['team' => $teamId, 'q' => (string) $request->request->get('q', '')]);
            }

            if ($moderation['severity'] === 'medium') {
                $this->addFlash('info', 'Message d’invitation envoyé avec avertissement modération.');
            }
        }

        $invite = (new TeamInvite())
            ->setTeamId($team)
            ->setInvitedUserId($invitedUser)
            ->setInvitedByUserId($viewer)
            ->setStatus('PENDING')
            ->setMessage($message)
            ->setCreatedAt(new \DateTime())
            ->setRespondedAt(null);
        $entityManager->persist($invite);

        $entityManager->flush();

        $realtimeNotifier->publish(
            sprintf('/users/%d/team-invites', (int) ($invitedUser->getUserId() ?? 0)),
            [
                'type' => 'team_invite.created',
                'team_id' => $team->getTeamId(),
                'team_name' => $team->getName(),
                'invite_id' => $invite->getInviteId(),
                'message' => $invite->getMessage(),
            ]
        );

        $this->addFlash('success', 'Invitation envoyee.');

        return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
    }

    private function toPositiveInt(mixed $rawValue): ?int
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = (int) $rawValue;

        return $value > 0 ? $value : null;
    }

    private function normalizeNullableText(mixed $rawValue): ?string
    {
        if (!is_scalar($rawValue)) {
            return null;
        }

        $value = trim((string) $rawValue);

        return $value !== '' ? $value : null;
    }
}

