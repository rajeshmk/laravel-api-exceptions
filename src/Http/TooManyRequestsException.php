<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (429 Too Many Requests): Indicates that the client has sent
 * too many requests in a given amount of time.
 */
class TooManyRequestsException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 429;
    }
}
