<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (408 Request Timeout): Indicates that the client did not
 * produce a request within the time that the server was prepared to wait.
 */
class RequestTimeoutException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 408;
    }
}
