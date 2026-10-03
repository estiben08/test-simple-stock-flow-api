<?php
namespace App\Domain\Model;

use App\Domain\ValueObject\Role;
use App\Domain\ValueObject\Username;

class User {
    private string \;
    private Username \;
    private string \;
    private Role \;

    public function __construct(string \, Username \, string \, Role \) {
        \->id = \;
        \->username = \;
        \->passwordHash = \;
        \->role = \;
    }

    public function id(): string { return \->id; }
    public function username(): Username { return \->username; }
    public function passwordHash(): string { return \->passwordHash; }
    public function role(): Role { return \->role; }
}
