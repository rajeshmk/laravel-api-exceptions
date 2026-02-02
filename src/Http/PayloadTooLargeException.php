<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (413 Payload Too Large): Indicates that the request payload
 * is larger than the server is willing or able to process.
 */
class PayloadTooLargeException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 413;
    }
}
