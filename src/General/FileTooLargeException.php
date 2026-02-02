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
        return new self("File too large: {$file}.");
    }
}
