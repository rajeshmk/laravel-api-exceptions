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
    public static function for(string $file): self
    {
        return self::forFile($file);
    }

    public static function forFile(string $file): self
    {
        return new self(__('api-exceptions::messages.file_too_large', [
            'file' => $file,
        ]));
    }
}
