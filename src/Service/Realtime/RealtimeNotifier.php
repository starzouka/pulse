<?php

declare(strict_types=1);

namespace App\Service\Realtime;

use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Psr\Log\LoggerInterface;

final class RealtimeNotifier
{
    public function __construct(
        private readonly ?HubInterface $hub = null,
        private readonly ?LoggerInterface $logger = null,
    ) {
    }

    /**
     * @param array<string, mixed> $payload
     */
    public function publish(string $topic, array $payload): void
    {
        if ($this->hub === null || trim($topic) === '') {
            return;
        }

        try {
            $this->hub->publish(new Update(
                $topic,
                json_encode($payload, JSON_THROW_ON_ERROR),
                true
            ));
        } catch (\Throwable $e) {
            $this->logger?->warning('Mercure publish failed.', [
                'topic' => $topic,
                'error' => $e->getMessage(),
            ]);
        }
    }
}

