<?php

declare(strict_types=1);

namespace App\Service\Ai\Generation;

use App\Entity\Team;
use App\Entity\User;

final class AssistedGenerationService
{
    public function __construct(
        private readonly RemoteContentGenerationInterface $remoteGenerator,
        private readonly LocalFallbackGenerationService $localGenerator,
    ) {
    }

    /**
     * @return array{
     *   message:string,
     *   source:'remote'|'local_fallback',
     *   provider:string,
     *   model:string
     * }
     */
    public function generateInvitationMessage(
        Team $team,
        User $captain,
        User $candidate,
        ?string $extraContext = null,
    ): array {
        $context = [
            'team' => [
                'id' => $team->getTeamId(),
                'name' => $team->getName(),
                'region' => $team->getRegion(),
                'description' => $team->getDescription(),
            ],
            'captain' => [
                'id' => $captain->getUserId(),
                'display_name' => $captain->getDisplayName(),
                'username' => $captain->getUsername(),
            ],
            'candidate' => [
                'id' => $candidate->getUserId(),
                'display_name' => $candidate->getDisplayName(),
                'username' => $candidate->getUsername(),
                'role' => $candidate->getRole(),
                'country' => $candidate->getCountry(),
                'bio' => $candidate->getBio(),
            ],
            'extra_context' => $extraContext,
        ];

        $remoteMessage = $this->remoteGenerator->generateInvitationMessage($context);
        if (is_string($remoteMessage) && trim($remoteMessage) !== '') {
            return [
                'message' => trim($remoteMessage),
                'source' => 'remote',
                'provider' => $this->remoteGenerator->getProvider(),
                'model' => $this->remoteGenerator->getModel(),
            ];
        }

        return [
            'message' => $this->localGenerator->generateInvitationMessage($team, $captain, $candidate, $extraContext),
            'source' => 'local_fallback',
            'provider' => 'local',
            'model' => 'template-v1',
        ];
    }

    /**
     * @return array{
     *   bio:string,
     *   slogan:string,
     *   source:'remote'|'local_fallback',
     *   provider:string,
     *   model:string
     * }
     */
    public function generateTeamBranding(Team $team, User $captain, ?string $styleHint = null): array
    {
        $context = [
            'team' => [
                'id' => $team->getTeamId(),
                'name' => $team->getName(),
                'region' => $team->getRegion(),
                'description' => $team->getDescription(),
            ],
            'captain' => [
                'id' => $captain->getUserId(),
                'display_name' => $captain->getDisplayName(),
                'username' => $captain->getUsername(),
            ],
            'style_hint' => $styleHint,
        ];

        $remoteBranding = $this->remoteGenerator->generateTeamBranding($context);
        if (
            is_array($remoteBranding)
            && trim((string) ($remoteBranding['bio'] ?? '')) !== ''
            && trim((string) ($remoteBranding['slogan'] ?? '')) !== ''
        ) {
            return [
                'bio' => trim((string) $remoteBranding['bio']),
                'slogan' => trim((string) $remoteBranding['slogan']),
                'source' => 'remote',
                'provider' => $this->remoteGenerator->getProvider(),
                'model' => $this->remoteGenerator->getModel(),
            ];
        }

        $localBranding = $this->localGenerator->generateTeamBranding($team, $captain, $styleHint);

        return [
            'bio' => $localBranding['bio'],
            'slogan' => $localBranding['slogan'],
            'source' => 'local_fallback',
            'provider' => 'local',
            'model' => 'template-v1',
        ];
    }
}
