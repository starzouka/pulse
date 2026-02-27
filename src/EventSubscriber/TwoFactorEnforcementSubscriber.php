<?php

declare(strict_types=1);

namespace App\EventSubscriber;

use App\Entity\User;
use App\Security\TwoFactorSession;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

final class TwoFactorEnforcementSubscriber implements EventSubscriberInterface
{
    /** @var list<string> */
    private const EXCLUDED_ROUTES = [
        'front_two_factor_challenge',
        'front_profile_2fa_state',
        'front_profile_2fa_setup',
        'front_profile_2fa_enable',
        'front_profile_2fa_disable',
        'front_login',
        'app_logout',
    ];

    public function __construct(
        private readonly TokenStorageInterface $tokenStorage,
        private readonly AuthorizationCheckerInterface $authorizationChecker,
        private readonly UrlGeneratorInterface $urlGenerator,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            // Run after the security firewall has loaded/authenticated the token.
            KernelEvents::REQUEST => ['onKernelRequest', -300],
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        if (!$request->hasSession()) {
            return;
        }
        $session = $request->getSession();

        $route = $request->attributes->get('_route');
        if (is_string($route) && (in_array($route, self::EXCLUDED_ROUTES, true) || str_starts_with($route, '_'))) {
            return;
        }

        if (!$this->authorizationChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return;
        }

        $token = $this->tokenStorage->getToken();
        if ($token === null) {
            return;
        }

        $user = $token->getUser();
        if (!$user instanceof User) {
            return;
        }

        if (!$user->isTwoFactorEnabled() || $user->getTwoFactorSecret() === null) {
            $session->set(TwoFactorSession::VERIFIED_FLAG, true);
            $session->remove(TwoFactorSession::TARGET_PATH);

            return;
        }

        $isVerified = $session->get(TwoFactorSession::VERIFIED_FLAG, false) === true;
        if ($isVerified) {
            return;
        }

        if ($request->isMethodCacheable()) {
            $session->set(TwoFactorSession::TARGET_PATH, $request->getRequestUri());
        }

        if (!str_starts_with($request->getPathInfo(), '/api/')) {
            $event->setResponse(new RedirectResponse($this->urlGenerator->generate('front_two_factor_challenge')));

            return;
        }

        $event->setResponse(new JsonResponse([
            'ok' => false,
            'message' => 'Verification 2FA requise.',
        ], JsonResponse::HTTP_FORBIDDEN));
    }
}
