<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Model;

use Hatchyu\ApiExceptions\Http\UnprocessableEntityException;
use Illuminate\Database\Eloquent\Model;

/**
 * (422 Unprocessable Entity): Indicates that a model could not be deleted.
 */
class ModelDeleteException extends UnprocessableEntityException
{
    private string $model;

    private string $keyName;

    private int|string $keyValue;

    private ?string $reason;

    public function __construct(Model $model, ?string $reason = null)
    {
        $this->model = class_basename($model);

        $this->keyName = $model->getKeyName();
        $this->keyValue = $model->getKey() ?? 'unknown';

        $this->reason = $reason;

        $message = $reason === null
            ? __('api-exceptions::messages.model_delete_failed', [
                'model' => $this->model,
                'key' => $this->keyName,
                'value' => $this->keyValue,
            ])
            : __('api-exceptions::messages.model_delete_failed_with_reason', [
                'model' => $this->model,
                'key' => $this->keyName,
                'value' => $this->keyValue,
                'reason' => $reason,
            ]);

        parent::__construct($message);
    }

    public static function for(Model $model, ?string $reason = null): self
    {
        return self::forModel($model, $reason);
    }

    public static function forModel(Model $model, ?string $reason = null): self
    {
        return new self($model, $reason);
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getKeyName(): string
    {
        return $this->keyName;
    }

    public function getKeyValue(): int|string
    {
        return $this->keyValue;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }
}
