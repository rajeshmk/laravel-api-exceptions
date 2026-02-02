<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (405 Method Not Allowed): Indicates that the requested resource
 * does not support the HTTP method used in the request.
 */
class MethodNotAllowedException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 405;
    }
}
