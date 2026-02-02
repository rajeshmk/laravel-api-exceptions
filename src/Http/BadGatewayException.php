<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (502 Bad Gateway): Indicates that the server, while acting as a gateway
 * or proxy, received an invalid response from an upstream server.
 */
class BadGatewayException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 502;
    }
}
