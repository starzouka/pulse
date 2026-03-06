<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\TournamentRequest;

final class TournamentRequestBusinessRules
{
    public function validateAll(TournamentRequest $request): bool
    {
        $this->validateTitle((string) $request->getTitle());
        $this->validateDateWindow($request->getStartDate(), $request->getEndDate(), $request->getRegistrationDeadline());
        $this->validateCapacity((int) $request->getMaxTeams());
        $this->validateFormat((string) $request->getFormat());
        $this->validateRegistrationMode((string) $request->getRegistrationMode());
        $this->validatePrizePool((string) $request->getPrizePool());

        return true;
    }

    public function validateTitle(string $title): bool
    {
        $normalized = trim($title);
        $length = mb_strlen($normalized);

        if ($length < 3 || $length > 180) {
            throw new \InvalidArgumentException('Le titre doit contenir entre 3 et 180 caracteres.');
        }

        return true;
    }

    public function validateDateWindow(
        ?\DateTimeInterface $startDate,
        ?\DateTimeInterface $endDate,
        ?\DateTimeInterface $registrationDeadline,
    ): bool {
        if (!$startDate || !$endDate) {
            throw new \InvalidArgumentException('Les dates de debut et de fin sont obligatoires.');
        }

        if ($endDate < $startDate) {
            throw new \InvalidArgumentException('La date de fin doit etre superieure ou egale a la date de debut.');
        }

        if ($registrationDeadline && $registrationDeadline > $startDate) {
            throw new \InvalidArgumentException("La date limite d'inscription doit etre inferieure ou egale a la date de debut.");
        }

        return true;
    }

    public function validateCapacity(int $maxTeams): bool
    {
        if ($maxTeams < 2 || $maxTeams > 1024) {
            throw new \InvalidArgumentException("Le nombre maximum d'equipes doit etre entre 2 et 1024.");
        }

        return true;
    }

    public function validateFormat(string $format): bool
    {
        if (!in_array($format, ['BO1', 'BO3', 'BO5'], true)) {
            throw new \InvalidArgumentException('Format invalide.');
        }

        return true;
    }

    public function validateRegistrationMode(string $registrationMode): bool
    {
        if (!in_array($registrationMode, ['OPEN', 'APPROVAL'], true)) {
            throw new \InvalidArgumentException("Mode d'inscription invalide.");
        }

        return true;
    }

    /**
     * @param int|float|string $prizePool
     */
    public function validatePrizePool(int|float|string $prizePool): bool
    {
        if (!is_numeric($prizePool)) {
            throw new \InvalidArgumentException('Le prize pool doit etre numerique.');
        }

        if ((float) $prizePool < 0) {
            throw new \InvalidArgumentException('Le prize pool doit etre superieur ou egal a 0.');
        }

        return true;
    }
}
