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
    private string $resource;

    private int|string|null $id;

    public function __construct(string $resource, int|string|null $id = null)
    {
        $this->resource = $resource;
        $this->id = $id;

        $message = $id === null
            ? __('api-exceptions::messages.duplicate_resource', [
                'resource' => $resource,
            ])
            : __('api-exceptions::messages.duplicate_resource_with_id', [
                'resource' => $resource,
                'id' => $id,
            ]);

        parent::__construct($message);
    }

    public static function for(string $resource, int|string|null $id = null): self
    {
        return self::forResource($resource, $id);
    }

    public static function forResource(string $resource, int|string|null $id = null): self
    {
        return new self($resource, $id);
    }

    public static function forModel(string $modelClass, int|string|null $id = null): self
    {
        return self::forResource(class_basename($modelClass), $id);
    }

    /**
     * Get the resource name associated with this exception.
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * Get the identifier that caused the uniqueness conflict, if available.
     */
    public function getId(): int|string|null
    {
        return $this->id;
    }
}
