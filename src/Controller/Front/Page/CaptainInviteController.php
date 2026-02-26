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
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

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

        $searchQuery = trim((string) $request->query->get('q', ''));
        $latestInvites = $teamInviteRepository->findLatestByTeam($activeTeam, 120);
        $recaptchaSiteKey = $this->getEnvString('GOOGLE_RECAPTCHA_SITE_KEY');

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
            'recaptcha_site_key' => $recaptchaSiteKey,
        ]);
    }

    #[Route('/pages/captain-invite/send', name: 'front_captain_invite_send', methods: ['POST'])]
    public function send(
        Request $request,
        CaptainTeamContextProvider $captainTeamContextProvider,
        TeamInviteRepository $teamInviteRepository,
        TeamMemberRepository $teamMemberRepository,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient,
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
        $recaptchaSecret = $this->getEnvString('GOOGLE_RECAPTCHA_SECRET_KEY');
        $recaptchaToken = trim((string) $request->request->get('g_recaptcha_token', ''));

        if ($recaptchaSecret === '') {
            $this->addFlash('error', 'reCAPTCHA non configuree. Ajoutez GOOGLE_RECAPTCHA_SECRET_KEY.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId > 0 ? $teamId : null]);
        }

        if ($recaptchaToken === '') {
            $this->addFlash('error', 'Veuillez confirmer la reCAPTCHA avant envoi.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId > 0 ? $teamId : null]);
        }

        $verification = $this->verifyRecaptchaToken(
            $httpClient,
            $recaptchaSecret,
            $recaptchaToken,
            $request->getClientIp(),
        );

        if (!$verification['success']) {
            $this->addFlash('error', 'Verification reCAPTCHA invalide. Reessayez.');

            return $this->redirectToRoute('front_captain_invite', ['team' => $teamId > 0 ? $teamId : null]);
        }

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

    private function getEnvString(string $key): string
    {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key) ?: '';

        return is_string($value) ? trim($value) : '';
    }

    /**
     * @return array{success: bool}
     */
    private function verifyRecaptchaToken(
        HttpClientInterface $httpClient,
        string $secret,
        string $token,
        ?string $clientIp,
    ): array {
        $payload = [
            'secret' => $secret,
            'response' => $token,
        ];

        if (is_string($clientIp) && $clientIp !== '') {
            $payload['remoteip'] = $clientIp;
        }

        try {
            $response = $httpClient->request(
                'POST',
                'https://www.google.com/recaptcha/api/siteverify',
                ['body' => $payload],
            );
            $data = $response->toArray(false);
        } catch (\Throwable) {
            return ['success' => false];
        }

        return [
            'success' => isset($data['success']) && $data['success'] === true,
        ];
    }
}

