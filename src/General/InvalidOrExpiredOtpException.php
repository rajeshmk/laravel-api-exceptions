<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\UnprocessableEntityException;

class InvalidOrExpiredOtpException extends UnprocessableEntityException {}
