<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (400 Bad Request): Represents a request that cannot be fulfilled
 * due to invalid or malformed data sent by the client.
 */
class BadRequestException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 400;
    }
}
