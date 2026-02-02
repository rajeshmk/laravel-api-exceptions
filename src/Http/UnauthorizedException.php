<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (401 Unauthorized): Indicates that the client's request lacks
 * valid authentication credentials for the requested resource.
 */
class UnauthorizedException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 401;
    }
}
