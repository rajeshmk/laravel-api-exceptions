<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (409 Conflict): Represents a conflict that occurs
 * when the current state of the server prevents the request from being completed.
 */
class ConflictException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 409;
    }
}
