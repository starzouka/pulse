<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\Team;
use App\Entity\TeamInvite;
use App\Entity\User;
use App\Repository\TeamInviteRepository;
use App\Repository\TeamMemberRepository;
use App\Repository\UserRepository;
use App\Service\Ai\Generation\AssistedGenerationService;
use App\Service\Ai\Moderation\ChatModerationDecisionService;
use App\Service\Ai\Moderation\ModerationFeedbackFormatter;
use App\Service\Captain\CaptainTeamContextProvider;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

final class CaptainInviteController extends AbstractController
{
    #[Route('/pages/captain-invite', name: 'front_captain_invite', methods: ['GET'])]
    public function index(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamInviteRepository $teamInviteRepository,
        TeamMemberRepository $teamMemberRepository,
        UserRepository $userRepository,
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

        $inviteAiSuggestions = [];
        $teamBranding = null;
        $session = $request->hasSession() ? $request->getSession() : null;
        if ($session instanceof SessionInterface) {
            $inviteAiSuggestions = $this->readSessionArray($session, 'captain_invite_ai_messages');

            $teamBrandingByTeamId = $this->readSessionArray($session, 'captain_team_branding_ai');
            $activeTeamId = $activeTeam->getTeamId() ?? 0;
            $rawBranding = $teamBrandingByTeamId[(string) $activeTeamId] ?? null;
            if (is_array($rawBranding)) {
                $teamBranding = [
                    'bio' => trim((string) ($rawBranding['bio'] ?? '')),
                    'slogan' => trim((string) ($rawBranding['slogan'] ?? '')),
                    'source' => trim((string) ($rawBranding['source'] ?? 'local_fallback')),
                    'provider' => trim((string) ($rawBranding['provider'] ?? 'local')),
                    'model' => trim((string) ($rawBranding['model'] ?? 'template-v1')),
                    'generated_at' => trim((string) ($rawBranding['generated_at'] ?? '')),
                ];
            }
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
            'ai_invite_suggestions' => $inviteAiSuggestions,
            'ai_team_branding' => $teamBranding,
            'recaptcha_site_key' => $this->getRecaptchaSiteKey(),
        ]);
    }

    #[Route('/pages/captain-invite/send', name: 'front_captain_invite_send', methods: ['POST'])]
    public function send(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamInviteRepository $teamInviteRepository,
        TeamMemberRepository $teamMemberRepository,
        UserRepository $userRepository,
        AssistedGenerationService $assistedGenerationService,
        ChatModerationDecisionService $chatModerationDecisionService,
        ModerationFeedbackFormatter $moderationFeedbackFormatter,
        HttpClientInterface $httpClient,
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

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        if (!$this->verifyRecaptcha($request, $httpClient)) {
            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
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

        $session = $request->hasSession() ? $request->getSession() : null;
        if ($message === null) {
            if ($session instanceof SessionInterface) {
                $suggestions = $this->readSessionArray($session, 'captain_invite_ai_messages');
                $storedSuggestion = trim((string) ($suggestions[(string) $invitedUserId] ?? ''));
                if ($storedSuggestion !== '') {
                    $message = $this->truncate($storedSuggestion, 255);
                }
            }

            if ($message === null) {
                $generated = $assistedGenerationService->generateInvitationMessage(
                    $team,
                    $viewer,
                    $invitedUser,
                    null,
                );
                $message = $this->truncate($generated['message'], 255);
            }
        }

        $moderation = $chatModerationDecisionService->moderateOutgoingMessage((string) ($message ?? ''));
        $moderationFeedback = $moderationFeedbackFormatter->format($moderation, 'Message d\'invitation');
        if ($moderationFeedback['decision'] === 'block') {
            $this->addFlash('error', $moderationFeedback['message']);

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
        }

        if ($moderationFeedback['decision'] === 'warn') {
            $this->addFlash('warning', $moderationFeedback['message']);
        } else {
            $this->addFlash('info', $moderationFeedback['message']);
        }

        $entityManager->persist(
            (new TeamInvite())
                ->setTeamId($team)
                ->setInvitedUserId($invitedUser)
                ->setInvitedByUserId($viewer)
                ->setStatus('PENDING')
                ->setMessage($message)
                ->setCreatedAt(new \DateTime())
                ->setRespondedAt(null),
        );

        $entityManager->flush();

        if ($session instanceof SessionInterface) {
            $suggestions = $this->readSessionArray($session, 'captain_invite_ai_messages');
            unset($suggestions[(string) $invitedUserId]);
            $session->set('captain_invite_ai_messages', $suggestions);
        }

        $this->addFlash('success', 'Invitation envoyee et moderee avec succes.');

        return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
    }

    #[Route('/pages/captain-invite/moderation-preview', name: 'front_captain_invite_moderation_preview', methods: ['POST'])]
    public function moderationPreview(
        Request $request,
        ChatModerationDecisionService $chatModerationDecisionService,
        ModerationFeedbackFormatter $moderationFeedbackFormatter,
    ): JsonResponse {
        if (!$this->isCsrfTokenValid('captain_invite_moderation_preview', (string) $request->request->get('_token'))) {
            return $this->json([
                'ok' => false,
                'error' => 'csrf_invalid',
                'message' => 'Jeton CSRF invalide.',
            ], HttpResponse::HTTP_FORBIDDEN);
        }

        $message = trim((string) $request->request->get('message', ''));
        if ($message === '') {
            return $this->json([
                'ok' => true,
                'data' => [
                    'decision' => 'allow',
                    'level' => 'info',
                    'message' => 'Aucun texte saisi pour la pre-analyse.',
                ],
            ]);
        }

        $moderation = $chatModerationDecisionService->moderateOutgoingMessage($message);
        $feedback = $moderationFeedbackFormatter->format($moderation, 'Message d\'invitation');

        return $this->json([
            'ok' => true,
            'data' => [
                'decision' => $feedback['decision'],
                'level' => $feedback['level'],
                'message' => $feedback['message'],
            ],
        ]);
    }

    #[Route('/pages/captain-invite/generate-message', name: 'front_captain_invite_generate_message', methods: ['POST'])]
    public function generateInviteMessage(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        UserRepository $userRepository,
        AssistedGenerationService $assistedGenerationService,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_invite_generate_message', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_invite');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $invitedUserId = (int) $request->request->get('invited_user_id', 0);
        $searchQuery = trim((string) $request->request->get('q', ''));

        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $invitedUser = $userRepository->find($invitedUserId);
        if (!$invitedUser instanceof User) {
            $this->addFlash('error', 'Utilisateur introuvable.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId, 'q' => $searchQuery]);
        }

        $generated = $assistedGenerationService->generateInvitationMessage(
            $team,
            $viewer,
            $invitedUser,
            null,
        );

        $session = $request->hasSession() ? $request->getSession() : null;
        if ($session instanceof SessionInterface) {
            $suggestions = $this->readSessionArray($session, 'captain_invite_ai_messages');
            $suggestions[(string) $invitedUserId] = $this->truncate($generated['message'], 255);
            $session->set('captain_invite_ai_messages', $suggestions);
        }

        $this->addFlash(
            'success',
            sprintf(
                'Message IA genere (%s/%s).',
                $generated['provider'],
                $generated['source']
            )
        );

        return $this->redirectToRoute('front_captain_invite', [
            'team' => $teamId,
            'q' => $searchQuery,
        ]);
    }

    #[Route('/pages/captain-invite/generate-branding', name: 'front_captain_invite_generate_branding', methods: ['POST'])]
    public function generateBranding(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        AssistedGenerationService $assistedGenerationService,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_invite_generate_branding', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_invite');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $generated = $assistedGenerationService->generateTeamBranding($team, $viewer);

        $session = $request->hasSession() ? $request->getSession() : null;
        if ($session instanceof SessionInterface) {
            $brandings = $this->readSessionArray($session, 'captain_team_branding_ai');
            $brandings[(string) $teamId] = [
                'bio' => $this->truncate($generated['bio'], 300),
                'slogan' => $this->truncate($generated['slogan'], 70),
                'source' => $generated['source'],
                'provider' => $generated['provider'],
                'model' => $generated['model'],
                'generated_at' => (new \DateTimeImmutable())->format('Y-m-d H:i'),
            ];
            $session->set('captain_team_branding_ai', $brandings);
        }

        $this->addFlash(
            'success',
            sprintf(
                'Branding IA genere (%s/%s).',
                $generated['provider'],
                $generated['source']
            )
        );

        return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
    }

    #[Route('/pages/captain-invite/apply-branding', name: 'front_captain_invite_apply_branding', methods: ['POST'])]
    public function applyBranding(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        EntityManagerInterface $entityManager,
    ): Response {
        $viewer = $this->getUser();
        if (!$viewer instanceof User) {
            return $this->redirectToRoute('front_login');
        }

        if (!$this->isCsrfTokenValid('captain_invite_apply_branding', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');

            return $this->redirectToRoute('front_captain_invite');
        }

        $teamId = (int) $request->request->get('team_id', 0);
        $team = $captainTeamContextProvider->resolveManagedTeamById($viewer, $teamId);
        if (!$team instanceof Team) {
            throw $this->createAccessDeniedException('Equipe non autorisee.');
        }

        $session = $request->hasSession() ? $request->getSession() : null;
        $brandings = $session instanceof SessionInterface
            ? $this->readSessionArray($session, 'captain_team_branding_ai')
            : [];

        $branding = $brandings[(string) $teamId] ?? null;
        if (!is_array($branding) || trim((string) ($branding['bio'] ?? '')) === '') {
            $this->addFlash('error', 'Aucun branding IA a appliquer.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
        }

        $team->setDescription($this->truncate(trim((string) $branding['bio']), 2000));
        $team->setUpdatedAt(new \DateTime());
        $entityManager->flush();

        $this->addFlash('success', "Le branding IA a ete applique a la fiche equipe.");

        return $this->redirectToRoute('front_captain_invite', ['team' => $teamId]);
    }

    private function verifyRecaptcha(Request $request, HttpClientInterface $httpClient): bool
    {
        $siteKey = $this->getRecaptchaSiteKey();
        $secretKey = $this->getRecaptchaSecretKey();
        if ($siteKey === '' || $secretKey === '') {
            return true;
        }

        $token = trim((string) $request->request->get('g-recaptcha-response', ''));
        if ($token === '') {
            $this->addFlash('error', 'Veuillez valider le reCAPTCHA.');

            return false;
        }

        try {
            $response = $httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => [
                    'secret' => $secretKey,
                    'response' => $token,
                    'remoteip' => (string) ($request->getClientIp() ?? ''),
                ],
                'timeout' => 8,
            ]);

            $payload = $response->toArray(false);
        } catch (\Throwable) {
            $this->addFlash('error', 'Verification reCAPTCHA impossible. Reessayez.');

            return false;
        }

        if (($payload['success'] ?? false) === true) {
            return true;
        }

        $errorCodes = $payload['error-codes'] ?? [];
        $errorSuffix = is_array($errorCodes) && $errorCodes !== []
            ? ' (' . implode(', ', array_map('strval', $errorCodes)) . ')'
            : '';

        $this->addFlash('error', 'reCAPTCHA invalide' . $errorSuffix . '.');

        return false;
    }

    private function getRecaptchaSiteKey(): string
    {
        return (string) ($_ENV['GOOGLE_RECAPTCHA_SITE_KEY']
            ?? $_SERVER['GOOGLE_RECAPTCHA_SITE_KEY']
            ?? getenv('GOOGLE_RECAPTCHA_SITE_KEY')
            ?: '');
    }

    private function getRecaptchaSecretKey(): string
    {
        return (string) ($_ENV['GOOGLE_RECAPTCHA_SECRET_KEY']
            ?? $_SERVER['GOOGLE_RECAPTCHA_SECRET_KEY']
            ?? getenv('GOOGLE_RECAPTCHA_SECRET_KEY')
            ?: '');
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

    /**
     * @return array<string, mixed>
     */
    private function readSessionArray(SessionInterface $session, string $key): array
    {
        $value = $session->get($key);

        return is_array($value) ? $value : [];
    }

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}

