<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\UnauthorizedException;

/**
 * (401 Unauthorized): Indicates that two-factor authentication
 * has not been verified for this request.
 */
class TwoFactorAuthenticationNotVerifiedException extends UnauthorizedException {}
