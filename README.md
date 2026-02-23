# Laravel API Exceptions

A small library of reusable API exception classes for Laravel apps. Each exception
implements `Responsable`, so throwing one returns a JSON error response with an
appropriate HTTP status code.

**Requirements**
- PHP `^8.2`
- Laravel `11.x` or `12.x`

**Install**
```bash
composer require hatchyu/laravel-api-exceptions
```

The service provider is auto-discovered by Laravel.

**Usage**
```php
use Hatchyu\ApiExceptions\Http\BadRequestException;

// Returns a 400 JSON response:
// { "error": { "message": "Invalid payload." } }
throw new BadRequestException('Invalid payload.');
```

If you omit a message, a default is generated from the class name, for example
`BadRequestException` becomes "Bad request.".

**Factory Helpers**
Some domain exceptions expose convenient factory methods for consistent messages:
```php
use Hatchyu\ApiExceptions\General\FileTooLargeException;
use Hatchyu\ApiExceptions\General\FileUploadException;
use Hatchyu\ApiExceptions\General\ModelNotFoundException;
use Hatchyu\ApiExceptions\Model\ModelCreateException;
use Hatchyu\ApiExceptions\Model\ModelUpdateException;
use Hatchyu\ApiExceptions\Model\ModelDeleteException;

throw FileTooLargeException::for('invoice.pdf');
throw FileUploadException::for('invoice.pdf');
throw UnsupportedFileTypeException::forFile('invoice.pdf', 'application/pdf');
throw ModelNotFoundException::forModel(Customer::class, 3);
throw ModelCreateException::forModel(Customer::class, 'Email already exists');
throw ModelUpdateException::forModel($customer);
throw ModelDeleteException::forModel($customer, 'Customer has active orders');
```

Note: `DocumentUploadException` is deprecated in favor of `FileUploadException`.

**Common Exceptions**
- `BadRequestException` (400)
- `UnauthorizedException` (401)
- `ForbiddenException` (403)
- `NotFoundException` (404)
- `ConflictException` (409)
- `UnprocessableEntityException` (422)
- `TooManyRequestsException` (429)
- `InternalServerErrorException` (500)
- `ServiceUnavailableException` (503)

**Namespaces**
- `Hatchyu\ApiExceptions\Http` (top-level HTTP status exceptions)
- `Hatchyu\ApiExceptions\Auth` (authentication/authorization helpers)
- `Hatchyu\ApiExceptions\General` (domain-friendly helpers)
- `Hatchyu\ApiExceptions\Model` (model operation helpers)
- `Hatchyu\ApiExceptions\Validation` (validation helpers)

**Custom Exceptions**
Create your own by extending `Hatchyu\ApiExceptions\Base\ApiBaseException` and
overriding `customHttpCode()`.

**Localization**
This package ships English translations in `resources/lang/en`. You can override
them in your app by placing files under
`resources/lang/{locale}/vendor/api-exceptions`.

**Publishing Translations**
To publish the translation files into your application for editing:
```bash
php artisan vendor:publish --tag=api-exceptions-translations
```
