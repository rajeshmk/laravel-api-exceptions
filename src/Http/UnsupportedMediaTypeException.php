<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (415 Unsupported Media Type): Indicates that the server
 * refuses to accept the request because the media type is unsupported.
 */
class UnsupportedMediaTypeException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 415;
    }
}
