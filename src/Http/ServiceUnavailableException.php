<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (503 Service Unavailable): Indicates that the server is
 * temporarily unable to handle the request (maintenance or overload).
 */
class ServiceUnavailableException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 503;
    }
}
