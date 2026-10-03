<?php
namespace App\Domain\ValueObject;

class Username {
    private string \;

    public function __construct(string \) {
        \->value = strtolower(trim(\));
    }

    public function value(): string {
        return \->value;
    }
}
