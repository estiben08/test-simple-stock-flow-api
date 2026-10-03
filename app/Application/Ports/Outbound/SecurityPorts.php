<?php
namespace App\Application\Ports\Outbound;

use App\Domain\Model\User;

interface PasswordHasher {
    public function hash(string \): string;
    public function verify(string \, string \): bool;
}

interface TokenGenerator {
    public function generateFor(User \): string;
}
