<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (412 Precondition Failed): Indicates that one or more conditions
 * given in the request header fields evaluated to false.
 */
class PreconditionFailedException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 412;
    }
}
