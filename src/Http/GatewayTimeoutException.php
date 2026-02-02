<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (504 Gateway Timeout): Indicates that the server, while acting
 * as a gateway or proxy, did not receive a timely response.
 */
class GatewayTimeoutException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 504;
    }
}
