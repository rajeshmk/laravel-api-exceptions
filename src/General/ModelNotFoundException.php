<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\NotFoundException;

/**
 * (404 Not Found): Indicates that the requested model
 * could not be found.
 */
class ModelNotFoundException extends NotFoundException
{
    private string $model;

    private int|string $id;

    public function __construct(string $modelClass, int|string $id)
    {
        $this->model = class_basename($modelClass);
        $this->id = $id;

        $message = __('api-exceptions::messages.model_not_found', [
            'model' => $this->model,
            'id' => $this->id,
        ]);

        parent::__construct($message);
    }

    public static function forModel(string $modelClass, int|string $id): self
    {
        return new self($modelClass, $id);
    }

    public static function for(string $modelClass, int|string $id): self
    {
        return self::forModel($modelClass, $id);
    }

    /**
     * Get the Eloquent model basename associated with this exception.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Get the identifier used to look up the missing model.
     */
    public function getId(): int|string
    {
        return $this->id;
    }
}
