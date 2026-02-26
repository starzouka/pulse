<?php

declare(strict_types=1);

namespace App\Service\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class GoogleRecaptchaVerifier
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $secretKey = '',
        private readonly float $minScore = 0.5,
    ) {
    }

    /**
     * @return array{enabled:bool,success:bool,score:float,action:?string,message:?string}
     */
    public function verifyRequest(Request $request, ?string $expectedAction = null): array
    {
        $token = trim((string) ($request->request->get('g-recaptcha-response') ?? $request->request->get('recaptcha_token') ?? ''));
        if (trim($this->secretKey) === '') {
            return [
                'enabled' => false,
                'success' => true,
                'score' => 1.0,
                'action' => null,
                'message' => null,
            ];
        }

        if ($token === '') {
            return [
                'enabled' => true,
                'success' => false,
                'score' => 0.0,
                'action' => null,
                'message' => 'Token reCAPTCHA manquant.',
            ];
        }

        try {
            $response = $this->httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => [
                    'secret' => trim($this->secretKey),
                    'response' => $token,
                    'remoteip' => (string) $request->getClientIp(),
                ],
                'timeout' => 10,
            ]);
            $payload = $response->toArray(false);
            $success = (bool) ($payload['success'] ?? false);
            $score = (float) ($payload['score'] ?? 0.0);
            $action = isset($payload['action']) ? (string) $payload['action'] : null;

            if ($success && $expectedAction !== null && $action !== null && $action !== $expectedAction) {
                return [
                    'enabled' => true,
                    'success' => false,
                    'score' => $score,
                    'action' => $action,
                    'message' => 'Action reCAPTCHA invalide.',
                ];
            }

            if ($success && $score < $this->minScore) {
                return [
                    'enabled' => true,
                    'success' => false,
                    'score' => $score,
                    'action' => $action,
                    'message' => sprintf('Score reCAPTCHA trop faible (%.2f).', $score),
                ];
            }

            if (!$success) {
                return [
                    'enabled' => true,
                    'success' => false,
                    'score' => $score,
                    'action' => $action,
                    'message' => 'Validation reCAPTCHA échouée.',
                ];
            }

            return [
                'enabled' => true,
                'success' => true,
                'score' => $score,
                'action' => $action,
                'message' => null,
            ];
        } catch (\Throwable) {
            return [
                'enabled' => true,
                'success' => false,
                'score' => 0.0,
                'action' => null,
                'message' => 'Erreur réseau reCAPTCHA.',
            ];
        }
    }
}

