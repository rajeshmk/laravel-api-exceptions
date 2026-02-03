<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Base;

use Exception;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class ApiBaseException extends Exception implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse([
            'error' => [
                'message' => $this->customMessage(),
            ],
        ], $this->customHttpCode());
    }

    protected function customHttpCode(): int
    {
        $code = $this->getCode();

        if ($code < 100) {
            return 500;
        }

        return $code;
    }

    private function customMessage(): string
    {
        if (($message = $this->getMessage()) !== '') {
            return $message;
        }

        $class = class_basename(static::class);

        $translationKey = 'api-exceptions::messages.' . Str::of($class)->snake();
        $translated = __($translationKey);

        if ($translated !== $translationKey) {
            return $translated;
        }

        return Str::of($class)
            ->snake(' ')
            ->replaceLast('exception', '')
            ->trim()
            ->ucfirst()
            ->append('.')
            ->toString()
        ;
    }
}
