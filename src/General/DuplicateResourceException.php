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
        $details = $id === null ? $resource : "{$resource} (id: {$id})";

        return new self("Duplicate resource: {$details}.");
    }
}
