<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions;

use Illuminate\Support\ServiceProvider;
use Override;

class ApiExceptionsServiceProvider extends ServiceProvider
{
    #[Override]
    public function boot(): void
    {
        $translationsPath = __DIR__ . '/../resources/lang';

        $this->loadTranslationsFrom($translationsPath, 'api-exceptions');

        $this->publishes([
            $translationsPath => resource_path('lang/vendor/api-exceptions'),
        ], 'api-exceptions-translations');
    }

    #[Override]
    public function register(): void
    {
        //
    }
}
