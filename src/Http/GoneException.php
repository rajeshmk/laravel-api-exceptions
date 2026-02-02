<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (410 Gone): Indicates that the requested resource
 * is no longer available and will not be available again.
 */
class GoneException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 410;
    }
}
