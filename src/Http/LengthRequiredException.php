<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (411 Length Required): Indicates that the server refuses to accept
 * the request without a defined Content-Length.
 */
class LengthRequiredException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 411;
    }
}
