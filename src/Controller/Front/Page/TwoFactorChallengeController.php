<?php

declare(strict_types=1);

namespace App\Controller\Front\Page;

use App\Entity\User;
use App\Security\TwoFactorSession;
use App\Service\Security\TwoFactorTotpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TwoFactorChallengeController extends AbstractController
{
    #[Route('/pages/two-factor', name: 'front_two_factor_challenge', methods: ['GET', 'POST'])]
    public function index(Request $request, TwoFactorTotpService $totpService): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('front_login', [
                '_target_path' => $request->getUri(),
            ]);
        }

        if (!$request->hasSession()) {
            $this->addFlash('error', 'Session indisponible.');

            return $this->redirectToRoute('front_login');
        }

        $session = $request->getSession();
        if (!$user->isTwoFactorEnabled() || $user->getTwoFactorSecret() === null) {
            $session->set(TwoFactorSession::VERIFIED_FLAG, true);
            $target = $this->sanitizeTargetPath((string) $session->get(TwoFactorSession::TARGET_PATH, ''));
            $session->remove(TwoFactorSession::TARGET_PATH);

            return $this->redirect($target);
        }

        $targetPath = $this->sanitizeTargetPath(trim((string) $request->query->get('_target_path', '')));
        if ($targetPath === $this->generateUrl('front_home')) {
            $targetPath = $this->sanitizeTargetPath((string) $session->get(TwoFactorSession::TARGET_PATH, ''));
        }

        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('two_factor_challenge', (string) $request->request->get('_token'))) {
                $this->addFlash('error', 'Jeton CSRF invalide.');
            } else {
                $code = (string) $request->request->get('code', '');
                if ($totpService->verifyCode((string) $user->getTwoFactorSecret(), $code, 1)) {
                    $session->set(TwoFactorSession::VERIFIED_FLAG, true);
                    $session->remove(TwoFactorSession::TARGET_PATH);

                    return $this->redirect($targetPath);
                }

                $this->addFlash('error', 'Code invalide. Verifiez votre application Authenticator.');
            }
        }

        return $this->render('front/pages/two-factor-challenge.html.twig', [
            'target_path' => $targetPath,
        ]);
    }

    private function sanitizeTargetPath(string $targetPath): string
    {
        $targetPath = trim($targetPath);
        if ($targetPath === '' || !str_starts_with($targetPath, '/') || str_starts_with($targetPath, '//')) {
            return $this->generateUrl('front_home');
        }

        return $targetPath;
    }
}
