<?php

declare(strict_types=1);

namespace App\Service\Media;

use App\Entity\Image;
use App\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;
use Symfony\Contracts\HttpClient\HttpClientInterface;

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
        private readonly HttpClientInterface $httpClient,
        private readonly ?LoggerInterface $logger = null,
        private readonly string $cloudinaryCloudName = '',
        private readonly string $cloudinaryApiKey = '',
        private readonly string $cloudinaryApiSecret = '',
        private readonly string $cloudinaryFolder = '',
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

        $cloudinaryImage = $this->uploadToCloudinary(
            $uploadedFile,
            $uploadedByUser,
            trim($targetDirectoryName, '/'),
            $filenamePrefix,
            $mimeType,
            $altText,
        );
        if ($cloudinaryImage instanceof Image) {
            return $cloudinaryImage;
        }

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

    private function uploadToCloudinary(
        UploadedFile $uploadedFile,
        User $uploadedByUser,
        string $targetDirectoryName,
        string $filenamePrefix,
        string $mimeType,
        ?string $altText,
    ): ?Image {
        if (!$this->canUseCloudinary()) {
            return null;
        }

        try {
            $timestamp = time();
            $publicId = trim($filenamePrefix, '_') . '_' . bin2hex(random_bytes(8));
            $folder = trim(($this->cloudinaryFolder !== '' ? $this->cloudinaryFolder : 'pulse') . '/' . $targetDirectoryName, '/');

            $signatureParams = [
                'folder' => $folder,
                'public_id' => $publicId,
                'timestamp' => (string) $timestamp,
            ];
            $signature = $this->signCloudinaryParams($signatureParams);

            $formFields = [
                'file' => DataPart::fromPath($uploadedFile->getPathname(), $uploadedFile->getClientOriginalName(), $mimeType),
                'api_key' => trim($this->cloudinaryApiKey),
                'timestamp' => (string) $timestamp,
                'signature' => $signature,
                'folder' => $folder,
                'public_id' => $publicId,
            ];
            $formData = new FormDataPart($formFields);

            $response = $this->httpClient->request('POST', sprintf(
                'https://api.cloudinary.com/v1_1/%s/image/upload',
                rawurlencode(trim($this->cloudinaryCloudName))
            ), [
                'headers' => $formData->getPreparedHeaders()->toArray(),
                'body' => $formData->bodyToIterable(),
                'timeout' => 20,
            ]);

            $payload = $response->toArray(false);
            $secureUrl = trim((string) ($payload['secure_url'] ?? ''));
            if ($secureUrl === '') {
                return null;
            }

            return (new Image())
                ->setFileUrl($secureUrl)
                ->setMimeType($mimeType)
                ->setSizeBytes((string) max(0, (int) ($payload['bytes'] ?? 0)))
                ->setWidth(isset($payload['width']) ? (int) $payload['width'] : null)
                ->setHeight(isset($payload['height']) ? (int) $payload['height'] : null)
                ->setAltText($altText)
                ->setUploadedByUserId($uploadedByUser)
                ->setCreatedAt(new \DateTime());
        } catch (\Throwable $e) {
            $this->logger?->warning('Cloudinary upload failed, falling back to local storage.', [
                'error' => $e->getMessage(),
            ]);

            return null;
        }
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

    private function canUseCloudinary(): bool
    {
        return trim($this->cloudinaryCloudName) !== ''
            && trim($this->cloudinaryApiKey) !== ''
            && trim($this->cloudinaryApiSecret) !== '';
    }

    /**
     * @param array<string, string> $params
     */
    private function signCloudinaryParams(array $params): string
    {
        ksort($params);

        $parts = [];
        foreach ($params as $key => $value) {
            $parts[] = $key . '=' . $value;
        }

        return sha1(implode('&', $parts) . trim($this->cloudinaryApiSecret));
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

