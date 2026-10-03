<?php
namespace App\Domain\Exception;

class InvalidRoleException extends BusinessRuleViolation {
    public function __construct() {
        parent::__construct("El rol asignado no es válido.");
    }
}
