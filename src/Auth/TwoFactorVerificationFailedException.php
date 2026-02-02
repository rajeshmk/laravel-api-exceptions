<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\UnauthorizedException;

/**
 * (401 Unauthorized): Indicates that the provided two-factor
 * authentication verification failed.
 */
class TwoFactorVerificationFailedException extends UnauthorizedException {}
