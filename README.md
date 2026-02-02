# Laravel API Exceptions

A small library of reusable API exception classes for Laravel apps. Each exception
implements `Responsable`, so throwing one returns a JSON error response with an
appropriate HTTP status code.

**Install**
```bash
composer require hatchyu/laravel-api-exceptions
```

**Usage**
```php
use Hatchyu\ApiExceptions\Http\BadRequestException;

// Returns a 400 JSON response:
// { "error": { "message": "Invalid payload." } }
throw new BadRequestException('Invalid payload.');
```

If you omit a message, a default is generated from the class name, for example:
`BadRequestException` becomes "Bad request.".

**Factory Helpers**
Some domain exceptions expose convenient factory methods for consistent messages:
```php
use Hatchyu\ApiExceptions\General\FileTooLargeException;
use Hatchyu\ApiExceptions\General\ModelNotFoundException;

throw FileTooLargeException::for('invoice.pdf');
throw ModelNotFoundException::forModel(Customer::class, 3);
```

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
- `Hatchyu\ApiExceptions\Validation` (validation helpers)

**Custom Exceptions**
Create your own by extending `Hatchyu\ApiExceptions\Base\ApiBaseException` and
overriding `customHttpCode()`.
