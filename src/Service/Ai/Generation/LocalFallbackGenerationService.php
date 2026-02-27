<?php

declare(strict_types=1);

namespace App\Service\Ai\Generation;

use App\Entity\Team;
use App\Entity\User;

final class LocalFallbackGenerationService
{
    public function generateInvitationMessage(
        Team $team,
        User $captain,
        User $candidate,
        ?string $extraContext = null,
    ): string {
        $teamName = trim((string) ($team->getName() ?? 'notre equipe'));
        $region = trim((string) ($team->getRegion() ?? ''));
        $captainName = trim((string) ($captain->getDisplayName() ?: $captain->getUsername() ?: 'le capitaine'));
        $candidateName = trim((string) ($candidate->getDisplayName() ?: $candidate->getUsername() ?: 'joueur'));
        $candidateRole = trim((string) ($candidate->getRole() ?: 'PLAYER'));

        $segments = [
            sprintf('Salut %s, ici %s, capitaine de %s.', $candidateName, $captainName, $teamName),
            sprintf('Ton profil %s nous interesse pour renforcer le roster.', $candidateRole),
            $region !== '' ? sprintf('Notre base est en %s, avec un planning stable.', $region) : 'On a un planning stable et des objectifs clairs.',
            'Si tu es partant, on peut discuter des prochains scrims.',
        ];

        $context = trim((string) $extraContext);
        if ($context !== '') {
            $segments[] = 'Contexte: ' . $this->truncate($context, 90) . '.';
        }

        return $this->truncate(implode(' ', $segments), 220);
    }

    /**
     * @return array{bio:string,slogan:string}
     */
    public function generateTeamBranding(Team $team, User $captain, ?string $styleHint = null): array
    {
        $teamName = trim((string) ($team->getName() ?? 'TEAM'));
        $region = trim((string) ($team->getRegion() ?? ''));
        $captainName = trim((string) ($captain->getDisplayName() ?: $captain->getUsername() ?: 'Capitaine'));
        $style = trim((string) $styleHint);

        $bioParts = [
            sprintf('%s est une equipe e-sport orientee performance, discipline et progression collective.', $teamName),
            $region !== '' ? sprintf('Ancree en %s, elle construit un roster actif et engage.', $region) : 'Elle construit un roster actif et engage.',
            sprintf('Structure pilotee par %s, avec focus sur scrims, communication et regularite.', $captainName),
        ];
        if ($style !== '') {
            $bioParts[] = sprintf('Style recherche: %s.', $this->truncate($style, 60));
        }

        $slogan = sprintf('%s - Jouer propre, gagner ensemble.', $teamName);
        if ($style !== '') {
            $slogan = sprintf('%s - %s, victoire collective.', $teamName, $this->truncate($style, 24));
        }

        return [
            'bio' => $this->truncate(implode(' ', $bioParts), 300),
            'slogan' => $this->truncate($slogan, 70),
        ];
    }

    private function truncate(string $value, int $maxLength): string
    {
        if ($maxLength <= 0 || mb_strlen($value) <= $maxLength) {
            return $value;
        }

        return rtrim(mb_substr($value, 0, max(1, $maxLength - 3))) . '...';
    }
}
