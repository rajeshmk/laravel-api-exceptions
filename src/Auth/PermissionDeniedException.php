<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\ForbiddenException;

/**
 * (403 Forbidden): Indicates that the authenticated user
 * lacks the required permissions.
 */
class PermissionDeniedException extends ForbiddenException
{
    public static function for(string $permission): self
    {
        return self::forPermission($permission);
    }

    public static function forPermission(string $permission): self
    {
        return new self(__('api-exceptions::messages.permission_denied', [
            'permission' => $permission,
        ]));
    }
}
