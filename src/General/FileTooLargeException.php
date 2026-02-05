<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\PayloadTooLargeException;

/**
 * (413 Payload Too Large): Indicates that the uploaded file
 * exceeds the allowed size.
 */
class FileTooLargeException extends PayloadTooLargeException
{
    private string $fileName;

    private int|string|null $size;

    private int|string|null $maxSize;

    public function __construct(string $file, int|string|null $size = null, int|string|null $maxSize = null)
    {
        $this->fileName = $file;
        $this->size = $size;
        $this->maxSize = $maxSize;

        $sizeText = self::formatBytes($size);
        $maxText = self::formatBytes($maxSize);

        if ($sizeText !== null && $maxText !== null) {
            $message = __('api-exceptions::messages.file_too_large_with_size_and_max', [
                'file' => $file,
                'size' => $sizeText,
                'max' => $maxText,
            ]);
        } elseif ($sizeText !== null) {
            $message = __('api-exceptions::messages.file_too_large_with_size', [
                'file' => $file,
                'size' => $sizeText,
            ]);
        } elseif ($maxText !== null) {
            $message = __('api-exceptions::messages.file_too_large_with_max', [
                'file' => $file,
                'max' => $maxText,
            ]);
        } else {
            $message = __('api-exceptions::messages.file_too_large', [
                'file' => $file,
            ]);
        }

        parent::__construct($message);
    }

    public static function for(string $file, int|string|null $size = null, int|string|null $maxSize = null): self
    {
        return self::forFile($file, $size, $maxSize);
    }

    public static function forFile(string $file, int|string|null $size = null, int|string|null $maxSize = null): self
    {
        return new self($file, $size, $maxSize);
    }

    /**
     * Get the filename or label associated with the upload.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Get the reported size for the upload, if available.
     */
    public function getSize(): int|string|null
    {
        return $this->size;
    }

    /**
     * Get the allowed maximum size, if available.
     */
    public function getMaxSize(): int|string|null
    {
        return $this->maxSize;
    }

    private static function formatBytes(int|string|null $value): ?string
    {
        if ($value === null) {
            return null;
        }

        if (is_string($value)) {
            return $value;
        }

        if ($value < 0) {
            return (string) $value;
        }

        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        $size = (float) $value;
        $unitIndex = 0;

        while ($size >= 1024 && $unitIndex < count($units) - 1) {
            $size /= 1024;
            $unitIndex++;
        }

        $formatted = number_format($size, 1, '.', '');
        $formatted = rtrim(rtrim($formatted, '0'), '.');

        return $formatted . ' ' . $units[$unitIndex];
    }
}
