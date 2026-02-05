<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\ConflictException;

/**
 * (409 Conflict): Indicates that the resource already exists
 * or violates a uniqueness constraint.
 */
class DuplicateResourceException extends ConflictException
{
    public static function for(string $resource, int|string|null $id = null): self
    {
        return self::forResource($resource, $id);
    }

    public static function forResource(string $resource, int|string|null $id = null): self
    {
        if ($id === null) {
            return new self(__('api-exceptions::messages.duplicate_resource', [
                'resource' => $resource,
            ]));
        }

        return new self(__('api-exceptions::messages.duplicate_resource_with_id', [
            'resource' => $resource,
            'id' => $id,
        ]));
    }
}
