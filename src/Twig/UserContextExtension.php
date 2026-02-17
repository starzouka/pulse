<?php

declare(strict_types=1);

namespace App\Twig;

use App\Entity\User;
use App\Security\CaptainAccess;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class UserContextExtension extends AbstractExtension
{
    public function __construct(
        private readonly CaptainAccess $captainAccess,
    ) {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('front_role', [$this, 'resolveFrontRole']),
        ];
    }

    public function resolveFrontRole(?User $user): string
    {
        if (!$user instanceof User) {
            return 'GUEST';
        }

        $domainRole = strtoupper($user->getRole());
        if ($domainRole === User::DOMAIN_ROLE_ADMIN) {
            return 'ADMIN';
        }

        if ($domainRole === User::DOMAIN_ROLE_ORGANIZER) {
            return 'ORGANIZER';
        }

        if ($domainRole === User::DOMAIN_ROLE_CAPTAIN || $this->captainAccess->isCaptain($user)) {
            return 'CAPTAIN';
        }

        return 'PLAYER';
    }
}
