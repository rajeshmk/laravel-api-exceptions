<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Http;

use Hatchyu\ApiExceptions\Base\ApiBaseException;

/**
 * (422 Unprocessable Entity): Indicates that the server understands
 * the content type of the request but was unable to process the contained instructions.
 */
class UnprocessableEntityException extends ApiBaseException
{
    protected function customHttpCode(): int
    {
        return 422;
    }
}
