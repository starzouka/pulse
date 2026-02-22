<?php

declare(strict_types=1);

namespace App\Security;

use App\Entity\User;
use App\Repository\TeamRepository;

final class CaptainAccess
{
    public function __construct(
        private readonly TeamRepository $teamRepository,
    ) {
    }

    public function isCaptain(mixed $user): bool
    {
        if (!$user instanceof User) {
            return false;
        }

        return $this->teamRepository->existsByCaptain($user);
    }
}
