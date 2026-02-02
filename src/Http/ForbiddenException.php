<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (403 Forbidden): Denotes that the client does not have
 * permission to access the requested resource.
 */
class ForbiddenException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 403;
    }
}
