<?php
namespace App\Domain\ValueObject;

use App\Domain\Exception\InvalidRoleException;

class Role {
    public const ADMIN = 'admin';
    public const SELLER = 'seller';

    private string \;

    public function __construct(string \) {
        if (!in_array(\, [self::ADMIN, self::SELLER])) {
            throw new InvalidRoleException();
        }
        \->value = \;
    }

    public function value(): string {
        return \->value;
    }
}
