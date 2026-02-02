<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\UnauthorizedException;

/**
 * (401 Unauthorized): Indicates that two-factor authentication
 * has not been configured for the account.
 */
class TwoFactorAuthenticationNotConfiguredException extends UnauthorizedException {}
