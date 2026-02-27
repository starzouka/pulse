<?php

declare(strict_types=1);

namespace App\Service\Ai\Generation;

interface RemoteContentGenerationInterface
{
    public function isEnabled(): bool;

    public function getProvider(): string;

    public function getModel(): string;

    /**
     * @param array<string, mixed> $context
     */
    public function generateInvitationMessage(array $context): ?string;

    /**
     * @param array<string, mixed> $context
     * @return array{bio:string,slogan:string}|null
     */
    public function generateTeamBranding(array $context): ?array;
}

