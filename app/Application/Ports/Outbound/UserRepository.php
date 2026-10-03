<?php
namespace App\Application\Ports\Outbound;

use App\Domain\Model\User;
use App\Domain\ValueObject\Username;

interface UserRepository {
    public function save(User \): void;
    public function findByUsername(Username \): ?User;
}
