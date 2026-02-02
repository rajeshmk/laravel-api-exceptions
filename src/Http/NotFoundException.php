<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (404 Not Found): Signifies that the requested resource
 * could not be found on the server.
 */
class NotFoundException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 404;
    }
}
