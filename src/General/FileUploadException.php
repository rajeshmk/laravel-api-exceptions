<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\UnprocessableEntityException;

/**
 * (422 Unprocessable Entity): Indicates that the file
 * upload could not be processed.
 */
class FileUploadException extends UnprocessableEntityException
{
    public static function forReason(string $reason): self
    {
        return new self($reason);
    }

    public static function for(string $filename): self
    {
        return self::forFile($filename);
    }

    public static function forFile(string $filename): self
    {
        return new self(__('api-exceptions::messages.file_upload_failed', [
            'file' => $filename,
        ]));
    }
}
