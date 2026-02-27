<?php

declare(strict_types=1);

namespace App\Service\Security;

final class TwoFactorTotpService
{
    private const BASE32_ALPHABET = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
    private const DIGITS = 6;
    private const PERIOD = 30;

    public function generateSecret(int $length = 32): string
    {
        $length = max(16, min(64, $length));
        $alphabetLength = strlen(self::BASE32_ALPHABET);
        $secret = '';
        $random = random_bytes($length);

        for ($i = 0; $i < $length; ++$i) {
            $secret .= self::BASE32_ALPHABET[ord($random[$i]) % $alphabetLength];
        }

        return $secret;
    }

    public function buildOtpAuthUri(string $issuer, string $accountLabel, string $secret): string
    {
        $issuer = trim($issuer) !== '' ? trim($issuer) : 'PULSE';
        $label = rawurlencode($issuer . ':' . $accountLabel);

        return sprintf(
            'otpauth://totp/%s?secret=%s&issuer=%s&algorithm=SHA1&digits=%d&period=%d',
            $label,
            rawurlencode($secret),
            rawurlencode($issuer),
            self::DIGITS,
            self::PERIOD
        );
    }

    public function buildQrCodeUrl(string $otpAuthUri, int $size = 220): string
    {
        $size = max(128, min(512, $size));

        return sprintf(
            'https://api.qrserver.com/v1/create-qr-code/?size=%dx%d&data=%s',
            $size,
            $size,
            rawurlencode($otpAuthUri)
        );
    }

    public function verifyCode(string $secret, string $code, int $window = 1): bool
    {
        $normalizedCode = preg_replace('/\D+/', '', trim($code)) ?? '';
        if (strlen($normalizedCode) !== self::DIGITS) {
            return false;
        }

        $timestamp = time();
        $window = max(0, min(3, $window));

        for ($offset = -$window; $offset <= $window; ++$offset) {
            $candidate = $this->generateCodeForTimestamp($secret, $timestamp + ($offset * self::PERIOD));
            if ($candidate === $normalizedCode) {
                return true;
            }
        }

        return false;
    }

    private function generateCodeForTimestamp(string $secret, int $timestamp): string
    {
        $counter = intdiv(max(0, $timestamp), self::PERIOD);
        $binarySecret = $this->decodeBase32($secret);
        if ($binarySecret === '') {
            return str_repeat('0', self::DIGITS);
        }

        $counterBytes = pack('N2', 0, $counter);
        $hmac = hash_hmac('sha1', $counterBytes, $binarySecret, true);
        $offset = ord(substr($hmac, -1)) & 0x0f;
        $binaryCode = (
            ((ord($hmac[$offset]) & 0x7f) << 24)
            | ((ord($hmac[$offset + 1]) & 0xff) << 16)
            | ((ord($hmac[$offset + 2]) & 0xff) << 8)
            | (ord($hmac[$offset + 3]) & 0xff)
        );

        $otp = $binaryCode % (10 ** self::DIGITS);

        return str_pad((string) $otp, self::DIGITS, '0', STR_PAD_LEFT);
    }

    private function decodeBase32(string $value): string
    {
        $value = strtoupper(trim($value));
        $value = preg_replace('/[^A-Z2-7]/', '', $value) ?? '';
        if ($value === '') {
            return '';
        }

        $buffer = 0;
        $bitsLeft = 0;
        $output = '';

        $length = strlen($value);
        for ($i = 0; $i < $length; ++$i) {
            $char = $value[$i];
            $index = strpos(self::BASE32_ALPHABET, $char);
            if ($index === false) {
                continue;
            }

            $buffer = ($buffer << 5) | $index;
            $bitsLeft += 5;

            while ($bitsLeft >= 8) {
                $bitsLeft -= 8;
                $output .= chr(($buffer >> $bitsLeft) & 0xff);
            }
        }

        return $output;
    }
}

