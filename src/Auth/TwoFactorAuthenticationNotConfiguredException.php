<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\Auth;

use Hatchyu\ApiExceptions\Http\UnauthorizedException;

class TwoFactorAuthenticationNotConfiguredException extends UnauthorizedException {}
