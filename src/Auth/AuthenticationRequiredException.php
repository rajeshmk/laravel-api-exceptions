<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\UnauthorizedException;

/**
 * (401 Unauthorized): Indicates that authentication is required
 * to access the requested resource.
 */
class AuthenticationRequiredException extends UnauthorizedException {}
