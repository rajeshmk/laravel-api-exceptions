<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\UnauthorizedException;

/**
 * (401 Unauthorized): Indicates that the authentication token
 * has expired and is no longer valid.
 */
class TokenExpiredException extends UnauthorizedException {}
