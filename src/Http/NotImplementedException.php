<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (501 Not Implemented): Indicates that the server does not
 * support the functionality required to fulfill the request.
 */
class NotImplementedException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 501;
    }
}
