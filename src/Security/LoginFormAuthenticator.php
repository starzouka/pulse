<?php

declare(strict_types=1);

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class LoginFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'front_login';

    public function __construct(
        private readonly UrlGeneratorInterface $urlGenerator,
        private readonly ValidatorInterface $validator,
    ) {
    }

    public function authenticate(Request $request): Passport
    {
        $identifier = strtolower(trim((string) $request->request->get('_username', '')));
        $plainPassword = (string) $request->request->get('_password', '');
        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $identifier);

        $violations = $this->validator->validate(
            ['email' => $identifier, 'password' => $plainPassword],
            new Assert\Collection([
                'email' => [
                    new Assert\NotBlank(message: "L'email est obligatoire."),
                    new Assert\Email(message: "Le format de l'email est invalide."),
                    new Assert\Length(max: 190, maxMessage: "L'email est trop long."),
                ],
                'password' => [
                    new Assert\NotBlank(message: "Le mot de passe est obligatoire."),
                    new Assert\Length(max: 255, maxMessage: "Le mot de passe est trop long."),
                ],
            ])
        );

        if (\count($violations) > 0) {
            throw new CustomUserMessageAuthenticationException((string) $violations[0]->getMessage());
        }

        return new Passport(
            new UserBadge($identifier),
            new PasswordCredentials($plainPassword),
            [
                new CsrfTokenBadge('authenticate', (string) $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $targetPath = $this->getTargetPath($request->getSession(), $firewallName);
        if ($targetPath) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('front_home'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
