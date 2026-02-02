<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\UnprocessableEntityException;

/**
 * (422 Unprocessable Entity): Indicates that the provided
 * one-time password is invalid or has expired.
 */
class InvalidOrExpiredOtpException extends UnprocessableEntityException {}
