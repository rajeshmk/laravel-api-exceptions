<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\UnsupportedMediaTypeException;

/**
 * (415 Unsupported Media Type): Indicates that the uploaded file
 * type is not supported.
 */
class UnsupportedFileTypeException extends UnsupportedMediaTypeException
{
    public static function for(string $file, ?string $type = null): self
    {
        return self::forFile($file, $type);
    }

    public static function forFile(string $file, ?string $type = null): self
    {
        return new self(__('api-exceptions::messages.unsupported_file_type', [
            'file' => $file,
            'type' => $type ?? 'unknown',
        ]));
    }
}
