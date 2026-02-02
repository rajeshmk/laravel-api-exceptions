<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (500 Internal Server Error): Represents an unexpected error
 * on the server that prevents it from fulfilling the request.
 */
class InternalServerErrorException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 500;
    }
}
