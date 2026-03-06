<?php

declare(strict_types=1);

namespace App\Tests\Service;

use App\Service\TournamentRequestBusinessRules;
use PHPUnit\Framework\TestCase;

final class TournamentRequestBusinessRulesTest extends TestCase
{
    private TournamentRequestBusinessRules $rules;

    protected function setUp(): void
    {
        $this->rules = new TournamentRequestBusinessRules();
    }

    public function testValidTitleIsAccepted(): void
    {
        self::assertTrue($this->rules->validateTitle('Spring Championship'));
    }

    public function testTooShortTitleIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->rules->validateTitle('ab');
    }

    public function testDateWindowWithEndBeforeStartIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->rules->validateDateWindow(
            new \DateTimeImmutable('2026-06-10'),
            new \DateTimeImmutable('2026-06-09'),
            null
        );
    }

    public function testDateWindowWithRegistrationAfterStartIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->rules->validateDateWindow(
            new \DateTimeImmutable('2026-06-10'),
            new \DateTimeImmutable('2026-06-12'),
            new \DateTimeImmutable('2026-06-11')
        );
    }

    public function testValidDateWindowIsAccepted(): void
    {
        self::assertTrue($this->rules->validateDateWindow(
            new \DateTimeImmutable('2026-06-10'),
            new \DateTimeImmutable('2026-06-12'),
            new \DateTimeImmutable('2026-06-08')
        ));
    }

    public function testCapacityLowerThanTwoIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->rules->validateCapacity(1);
    }

    public function testInvalidFormatIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->rules->validateFormat('BO7');
    }

    public function testInvalidRegistrationModeIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->rules->validateRegistrationMode('PRIVATE');
    }

    public function testNegativePrizePoolIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->rules->validatePrizePool('-1');
    }

    public function testValidPrizePoolIsAccepted(): void
    {
        self::assertTrue($this->rules->validatePrizePool('250.50'));
    }
}
