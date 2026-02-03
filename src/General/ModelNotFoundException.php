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
    public static function forModel(string $modelClass, int|string $id): self
    {
        $model = class_basename($modelClass);

        return new self(__('api-exceptions::messages.model_not_found', [
            'model' => $model,
            'id' => $id,
        ]));
    }
}
