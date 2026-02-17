<?php

declare(strict_types=1);

namespace App\Security\Voter;

use App\Entity\Team;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

final class TeamVoter extends Voter
{
    public const TEAM_EDIT = 'TEAM_EDIT';
    public const TEAM_INVITE = 'TEAM_INVITE';
    public const TEAM_KICK = 'TEAM_KICK';
    public const TEAM_PRODUCTS_MANAGE = 'TEAM_PRODUCTS_MANAGE';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [
            self::TEAM_EDIT,
            self::TEAM_INVITE,
            self::TEAM_KICK,
            self::TEAM_PRODUCTS_MANAGE,
        ], true) && $subject instanceof Team;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!$user instanceof User) {
            return false;
        }

        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            return true;
        }

        if (!$subject instanceof Team) {
            return false;
        }

        $captain = $subject->getCaptainUserId();
        if (!$captain instanceof User || $captain->getUserId() === null || $user->getUserId() === null) {
            return false;
        }

        return $captain->getUserId() === $user->getUserId();
    }
}
