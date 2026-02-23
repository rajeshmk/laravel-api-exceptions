<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Model;

use Hatchyu\ApiExceptions\Http\NotFoundException;
use Illuminate\Database\Eloquent\Model;

/**
 * (404 Not Found): Indicates that the requested model
 * could not be found.
 */
class ModelNotFoundException extends NotFoundException
{
    private string $model;

    private int|string $keyValue;

    /**
     * @param class-string<Model> $model
     */
    public function __construct(string $model, int|string $id)
    {
        $this->model = class_basename($model);
        $this->keyValue = $id;

        $message = __('api-exceptions::messages.model_not_found', [
            'model' => $this->model,
            'id' => $this->keyValue,
        ]);

        parent::__construct($message);
    }

    /**
     * @param class-string<Model> $model
     */
    public static function forModel(string $model, int|string $id): self
    {
        return new self($model, $id);
    }

    /**
     * @param class-string<Model> $model
     */
    public static function for(string $model, int|string $id): self
    {
        return self::forModel($model, $id);
    }

    /**
     * Get the Eloquent model basename associated with this exception.
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Returns the primary key value used for lookup.
     */
    public function getKeyValue(): int|string
    {
        return $this->keyValue;
    }

    /**
     * Alias of {@see getKeyValue()}.
     */
    public function getId(): int|string
    {
        return $this->getKeyValue();
    }
}
