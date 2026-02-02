<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (406 Not Acceptable): Indicates that the server cannot
 * produce a response matching the list of acceptable values.
 */
class NotAcceptableException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 406;
    }
}
