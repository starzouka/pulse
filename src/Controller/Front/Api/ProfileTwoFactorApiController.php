<?php

declare(strict_types=1);

namespace App\Controller\Front\Api;

use App\Entity\User;
use App\Security\TwoFactorSession;
use App\Service\Security\TwoFactorTotpService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/profile/2fa')]
final class ProfileTwoFactorApiController extends AbstractController
{
    #[Route('', name: 'front_profile_2fa_state', methods: ['GET'])]
    public function state(Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json([
                'ok' => false,
                'message' => 'Authentification requise.',
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        if (!$request->hasSession()) {
            return $this->json([
                'ok' => false,
                'message' => 'Session indisponible.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        $session = $request->getSession();
        $pendingSecret = (string) $session->get(TwoFactorSession::PENDING_SECRET, '');
        $pendingAtRaw = $session->get(TwoFactorSession::PENDING_AT);
        $pendingAt = null;
        if (is_string($pendingAtRaw) && $pendingAtRaw !== '') {
            $pendingAt = $pendingAtRaw;
        }

        return $this->json([
            'ok' => true,
            'enabled' => $user->isTwoFactorEnabled(),
            'has_secret' => $user->getTwoFactorSecret() !== null,
            'enabled_at' => $user->getTwoFactorEnabledAt()?->format(\DateTimeInterface::ATOM),
            'pending_setup' => $pendingSecret !== '',
            'pending_at' => $pendingAt,
        ]);
    }

    #[Route('/setup', name: 'front_profile_2fa_setup', methods: ['POST'])]
    public function setup(
        Request $request,
        TwoFactorTotpService $totpService,
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json([
                'ok' => false,
                'message' => 'Authentification requise.',
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        if (!$request->hasSession()) {
            return $this->json([
                'ok' => false,
                'message' => 'Session indisponible.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        if (!$this->isCsrfTokenValid('profile_2fa_api', $this->extractCsrfToken($request))) {
            return $this->json([
                'ok' => false,
                'message' => 'Jeton CSRF invalide.',
            ], JsonResponse::HTTP_FORBIDDEN);
        }

        $session = $request->getSession();
        $secret = $totpService->generateSecret(32);
        $issuer = 'PULSE';
        $accountLabel = (string) ($user->getEmail() ?? $user->getUsername() ?? 'user');
        $otpAuthUri = $totpService->buildOtpAuthUri($issuer, $accountLabel, $secret);

        $session->set(TwoFactorSession::PENDING_SECRET, $secret);
        $session->set(TwoFactorSession::PENDING_AT, (new \DateTimeImmutable())->format(\DateTimeInterface::ATOM));

        return $this->json([
            'ok' => true,
            'message' => 'Configuration 2FA generee. Scannez le QR puis saisissez le code.',
            'secret' => $secret,
            'otp_auth_uri' => $otpAuthUri,
            'qr_code_url' => $totpService->buildQrCodeUrl($otpAuthUri),
        ]);
    }

    #[Route('/enable', name: 'front_profile_2fa_enable', methods: ['POST'])]
    public function enable(
        Request $request,
        TwoFactorTotpService $totpService,
        EntityManagerInterface $entityManager,
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json([
                'ok' => false,
                'message' => 'Authentification requise.',
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        if (!$request->hasSession()) {
            return $this->json([
                'ok' => false,
                'message' => 'Session indisponible.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        if (!$this->isCsrfTokenValid('profile_2fa_api', $this->extractCsrfToken($request))) {
            return $this->json([
                'ok' => false,
                'message' => 'Jeton CSRF invalide.',
            ], JsonResponse::HTTP_FORBIDDEN);
        }

        $payload = $this->decodePayload($request);
        $code = isset($payload['code']) && is_scalar($payload['code']) ? (string) $payload['code'] : '';
        if ($code === '') {
            return $this->json([
                'ok' => false,
                'message' => 'Code TOTP requis.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        $session = $request->getSession();
        $pendingSecret = (string) $session->get(TwoFactorSession::PENDING_SECRET, '');
        if ($pendingSecret === '') {
            return $this->json([
                'ok' => false,
                'message' => 'Aucune configuration en attente. Relancez la configuration.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        if (!$totpService->verifyCode($pendingSecret, $code, 1)) {
            return $this->json([
                'ok' => false,
                'message' => 'Code invalide. Verifiez l heure de votre telephone.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        $now = new \DateTime();
        $user
            ->setTwoFactorEnabled(true)
            ->setTwoFactorSecret($pendingSecret)
            ->setTwoFactorEnabledAt($now)
            ->setUpdatedAt($now)
        ;
        $entityManager->flush();

        $session->remove(TwoFactorSession::PENDING_SECRET);
        $session->remove(TwoFactorSession::PENDING_AT);
        $session->set(TwoFactorSession::VERIFIED_FLAG, true);

        return $this->json([
            'ok' => true,
            'message' => 'Authentification a deux facteurs activee.',
        ]);
    }

    #[Route('/disable', name: 'front_profile_2fa_disable', methods: ['POST'])]
    public function disable(
        Request $request,
        TwoFactorTotpService $totpService,
        EntityManagerInterface $entityManager,
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->json([
                'ok' => false,
                'message' => 'Authentification requise.',
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        if (!$request->hasSession()) {
            return $this->json([
                'ok' => false,
                'message' => 'Session indisponible.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        if (!$this->isCsrfTokenValid('profile_2fa_api', $this->extractCsrfToken($request))) {
            return $this->json([
                'ok' => false,
                'message' => 'Jeton CSRF invalide.',
            ], JsonResponse::HTTP_FORBIDDEN);
        }

        if (!$user->isTwoFactorEnabled() || $user->getTwoFactorSecret() === null) {
            return $this->json([
                'ok' => true,
                'message' => 'La double authentification est deja desactivee.',
            ]);
        }

        $payload = $this->decodePayload($request);
        $code = isset($payload['code']) && is_scalar($payload['code']) ? (string) $payload['code'] : '';
        if ($code === '' || !$totpService->verifyCode((string) $user->getTwoFactorSecret(), $code, 1)) {
            return $this->json([
                'ok' => false,
                'message' => 'Code invalide. La desactivation est refusee.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        $now = new \DateTime();
        $user
            ->setTwoFactorEnabled(false)
            ->setTwoFactorSecret(null)
            ->setTwoFactorEnabledAt(null)
            ->setUpdatedAt($now)
        ;
        $entityManager->flush();

        $session = $request->getSession();
        $session->remove(TwoFactorSession::PENDING_SECRET);
        $session->remove(TwoFactorSession::PENDING_AT);
        $session->set(TwoFactorSession::VERIFIED_FLAG, true);

        return $this->json([
            'ok' => true,
            'message' => 'Authentification a deux facteurs desactivee.',
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function decodePayload(Request $request): array
    {
        $raw = trim((string) $request->getContent());
        if ($raw === '') {
            return [];
        }

        try {
            $decoded = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
        } catch (\Throwable) {
            return [];
        }

        return is_array($decoded) ? $decoded : [];
    }

    private function extractCsrfToken(Request $request): string
    {
        $token = (string) $request->headers->get('X-CSRF-TOKEN', '');
        if ($token !== '') {
            return $token;
        }

        $payload = $this->decodePayload($request);
        if (isset($payload['_token']) && is_scalar($payload['_token'])) {
            return (string) $payload['_token'];
        }

        return '';
    }
}
