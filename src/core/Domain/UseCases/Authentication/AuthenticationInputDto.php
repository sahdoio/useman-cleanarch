<?php

declare(strict_types=1);

namespace Core\Domain\UseCases\Authentication;

use App\Core\Domain\Helpers\BaseDto;

final class AuthenticationInputDto extends BaseDto
{
    public function __construct(
        public readonly string $email,
        public readonly string $username,
        public readonly string $password
    ) {}
}