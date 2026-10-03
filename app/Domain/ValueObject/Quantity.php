<?php
namespace App\Domain\ValueObject;

use App\Domain\Exception\InvalidQuantityException;

class Quantity {
    private int \;

    public function __construct(int \) {
        if (\ <= 0) {
            throw new InvalidQuantityException();
        }
        \->value = \;
    }

    public function value(): int {
        return \->value;
    }
}
