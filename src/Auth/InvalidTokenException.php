<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\UnauthorizedException;

/**
 * (401 Unauthorized): Indicates that the provided token is invalid.
 */
class InvalidTokenException extends UnauthorizedException
{
    public static function forToken(string $token): self
    {
        return new self("Invalid token: {$token}.");
    }

    public static function forReason(string $reason): self
    {
        return new self($reason);
    }
}
