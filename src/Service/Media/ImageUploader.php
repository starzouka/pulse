<?php

declare(strict_types=1);

namespace App\Service\Media;

use App\Entity\Image;
use App\Entity\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\KernelInterface;

final class ImageUploader
{
    /**
     * @var array<string, string>
     */
    private const MIME_TO_EXTENSION = [
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/webp' => 'webp',
        'image/gif' => 'gif',
    ];

    public function __construct(
        private readonly KernelInterface $kernel,
    ) {
    }

    public function isValidImageUpload(mixed $uploadedFile): bool
    {
        if (!$uploadedFile instanceof UploadedFile || !$uploadedFile->isValid()) {
            return false;
        }

        $mimeType = $this->resolveMimeType($uploadedFile);

        return isset(self::MIME_TO_EXTENSION[$mimeType]);
    }

    /**
     * @param array<int, mixed> $rawFiles
     * @return list<UploadedFile>
     */
    public function normalizeUploads(array $rawFiles): array
    {
        $normalizedFiles = [];
        foreach ($rawFiles as $rawFile) {
            if (is_array($rawFile)) {
                foreach ($rawFile as $nestedFile) {
                    if ($nestedFile instanceof UploadedFile) {
                        $normalizedFiles[] = $nestedFile;
                    }
                }

                continue;
            }

            if ($rawFile instanceof UploadedFile) {
                $normalizedFiles[] = $rawFile;
            }
        }

        return $normalizedFiles;
    }

    public function uploadImage(
        UploadedFile $uploadedFile,
        User $uploadedByUser,
        string $targetDirectoryName,
        string $filenamePrefix,
        ?string $altText = null,
    ): Image {
        $mimeType = $this->resolveMimeType($uploadedFile);
        if (!isset(self::MIME_TO_EXTENSION[$mimeType])) {
            throw new \RuntimeException('Format image non supporte.');
        }

        $extension = $this->resolveExtension($uploadedFile, $mimeType);
        $filename = $filenamePrefix . '_' . bin2hex(random_bytes(10)) . '.' . $extension;

        $projectDirectory = $this->kernel->getProjectDir();
        $targetDirectory = $projectDirectory . '/public/uploads/' . trim($targetDirectoryName, '/');
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0775, true);
        }

        $uploadedFile->move($targetDirectory, $filename);
        $storedAbsolutePath = $targetDirectory . '/' . $filename;

        [$width, $height] = $this->readImageSize($storedAbsolutePath);

        return (new Image())
            ->setFileUrl('uploads/' . trim($targetDirectoryName, '/') . '/' . $filename)
            ->setMimeType($mimeType)
            ->setSizeBytes((string) max(0, (int) filesize($storedAbsolutePath)))
            ->setWidth($width)
            ->setHeight($height)
            ->setAltText($altText)
            ->setUploadedByUserId($uploadedByUser)
            ->setCreatedAt(new \DateTime());
    }

    private function resolveMimeType(UploadedFile $uploadedFile): string
    {
        try {
            $mimeType = $uploadedFile->getMimeType();
            if (is_string($mimeType) && $mimeType !== '') {
                return strtolower($mimeType);
            }
        } catch (\Throwable) {
            // Ignore and fallback.
        }

        try {
            $mimeType = $uploadedFile->getClientMimeType();
            if (is_string($mimeType) && $mimeType !== '') {
                return strtolower($mimeType);
            }
        } catch (\Throwable) {
            // Ignore and fallback.
        }

        return '';
    }

    private function resolveExtension(UploadedFile $uploadedFile, string $mimeType): string
    {
        try {
            $guessedExtension = $uploadedFile->guessExtension();
            if (is_string($guessedExtension) && $guessedExtension !== '') {
                return strtolower($guessedExtension);
            }
        } catch (\Throwable) {
            // Ignore and fallback.
        }

        $clientNameExtension = strtolower((string) pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_EXTENSION));
        if ($clientNameExtension !== '') {
            return $clientNameExtension;
        }

        return self::MIME_TO_EXTENSION[$mimeType] ?? 'jpg';
    }

    /**
     * @return array{0:?int,1:?int}
     */
    private function readImageSize(string $absolutePath): array
    {
        try {
            $size = @getimagesize($absolutePath);
            if (is_array($size) && isset($size[0], $size[1])) {
                return [(int) $size[0], (int) $size[1]];
            }
        } catch (\Throwable) {
            // Ignore and keep nullable dimensions.
        }

        return [null, null];
    }
}

