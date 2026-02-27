<?php

declare(strict_types=1);

namespace App\Security;

final class TwoFactorSession
{
    public const VERIFIED_FLAG = '_2fa_verified';
    public const TARGET_PATH = '_2fa_target_path';
    public const PENDING_SECRET = '_2fa_pending_secret';
    public const PENDING_AT = '_2fa_pending_at';

    private function __construct()
    {
    }
}

