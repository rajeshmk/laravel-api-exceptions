<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions;

use Illuminate\Support\ServiceProvider;

class ApiExceptionsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $translationsPath = __DIR__ . '/../resources/lang';

        $this->loadTranslationsFrom($translationsPath, 'api-exceptions');

        $this->publishes([
            $translationsPath => resource_path('lang/vendor/api-exceptions'),
        ], 'api-exceptions-translations');
    }

    public function register(): void
    {
        //
    }
}
