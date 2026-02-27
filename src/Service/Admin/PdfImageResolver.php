<?php

declare(strict_types=1);

namespace App\Service\Admin;

use Symfony\Component\HttpKernel\KernelInterface;

final class PdfImageResolver
{
    /**
     * @var array<string, string>
     */
    private array $dataUriCache = [];

    public function __construct(private readonly KernelInterface $kernel)
    {
    }

    public function resolveFromPublicPath(?string $path, string $fallbackRelativePath): string
    {
        $resolved = $this->resolveLocalPublicFile($path)
            ?? $this->resolveLocalPublicFile($fallbackRelativePath);

        if ($resolved === null) {
            return '';
        }

        return $this->fileToDataUri($resolved) ?? '';
    }

    private function resolveLocalPublicFile(?string $path): ?string
    {
        if (!is_string($path)) {
            return null;
        }

        $normalized = trim($path);
        if ($normalized === '') {
            return null;
        }

        if (str_starts_with($normalized, 'http://') || str_starts_with($normalized, 'https://')) {
            return null;
        }

        $relativePath = ltrim(str_replace('\\', '/', $normalized), '/');
        $absolutePath = $this->kernel->getProjectDir() . '/public/' . $relativePath;

        return is_file($absolutePath) ? $absolutePath : null;
    }

    private function fileToDataUri(string $absolutePath): ?string
    {
        if (isset($this->dataUriCache[$absolutePath])) {
            return $this->dataUriCache[$absolutePath];
        }

        $content = @file_get_contents($absolutePath);
        if ($content === false) {
            return null;
        }

        $mimeType = @mime_content_type($absolutePath);
        if (!is_string($mimeType) || trim($mimeType) === '') {
            $mimeType = 'image/jpeg';
        }

        $dataUri = sprintf('data:%s;base64,%s', $mimeType, base64_encode($content));
        $this->dataUriCache[$absolutePath] = $dataUri;

        return $dataUri;
    }
}
