<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Model;

use Hatchyu\ApiExceptions\Http\UnprocessableEntityException;
use Illuminate\Database\Eloquent\Model;

/**
 * (422 Unprocessable Entity): Indicates that a model could not be created.
 */
class ModelCreateException extends UnprocessableEntityException
{
    private string $model;

    private ?string $reason;

    /**
     * @param Model|class-string<Model> $model
     */
    public function __construct(Model|string $model, ?string $reason = null)
    {
        $this->model = class_basename($model);
        $this->reason = $reason;

        $message = $reason === null
            ? __('api-exceptions::messages.model_create_failed', [
                'model' => $this->model,
            ])
            : __('api-exceptions::messages.model_create_failed_with_reason', [
                'model' => $this->model,
                'reason' => $reason,
            ]);

        parent::__construct($message);
    }

    /**
     * @param Model|class-string<Model> $model
     */
    public static function for(Model|string $model, ?string $reason = null): self
    {
        return self::forModel($model, $reason);
    }

    /**
     * @param Model|class-string<Model> $model
     */
    public static function forModel(Model|string $model, ?string $reason = null): self
    {
        return new self($model, $reason);
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }
}
