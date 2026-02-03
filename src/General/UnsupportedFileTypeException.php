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
    public static function for(string $file): self
    {
        return new self(__('api-exceptions::messages.unsupported_file_type', [
            'file' => $file,
        ]));
    }
}
