<?php

namespace app\database\entities;

use core\dbal\Entity;

class UserEntity extends Entity
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string $email,
        public readonly string $password,
        public readonly ?string $updated_at = null,
        public readonly ?string $image = null,
        public readonly ?int $id = null,
        public readonly ?string $created_at = null,
    ) {
    }
}
