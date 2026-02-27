<?php

declare(strict_types=1);

namespace App\EventSubscriber;

use App\Entity\User;
use App\Security\TwoFactorSession;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

final class LoginSuccessSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly UrlGeneratorInterface $urlGenerator,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccess',
        ];
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();
        if (!$user instanceof User) {
            return;
        }

        $now = new \DateTime();
        $user->setLastLoginAt($now);
        $user->setUpdatedAt($now);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $request = $event->getRequest();
        if (!$request->hasSession()) {
            return;
        }
        $session = $request->getSession();

        if ($user->isTwoFactorEnabled() && $user->getTwoFactorSecret() !== null) {
            $session->set(TwoFactorSession::VERIFIED_FLAG, false);

            $existingResponse = $event->getResponse();
            if ($existingResponse instanceof RedirectResponse) {
                $targetPath = $this->normalizeTargetPath($existingResponse->getTargetUrl());
                if ($targetPath !== null) {
                    $session->set(TwoFactorSession::TARGET_PATH, $targetPath);
                }
            }

            $event->setResponse(new RedirectResponse($this->urlGenerator->generate('front_two_factor_challenge')));

            return;
        }

        $session->set(TwoFactorSession::VERIFIED_FLAG, true);
        $session->remove(TwoFactorSession::TARGET_PATH);
    }

    private function normalizeTargetPath(string $targetUrl): ?string
    {
        $targetUrl = trim($targetUrl);
        if ($targetUrl === '') {
            return null;
        }

        if (str_starts_with($targetUrl, '/') && !str_starts_with($targetUrl, '//')) {
            return $targetUrl;
        }

        $parts = parse_url($targetUrl);
        if (!is_array($parts)) {
            return null;
        }

        $path = (string) ($parts['path'] ?? '');
        if ($path === '' || !str_starts_with($path, '/')) {
            return null;
        }

        $query = isset($parts['query']) && $parts['query'] !== '' ? '?' . $parts['query'] : '';

        return $path . $query;
    }
}
