<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Validation;

use Hatchyu\ApiExceptions\Http\UnprocessableEntityException;

/**
 * (422 Unprocessable Entity): Indicates that the request
 * failed custom validation rules.
 */
class CustomValidationException extends UnprocessableEntityException {}
