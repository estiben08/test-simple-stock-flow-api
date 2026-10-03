<?php
namespace App\Domain\Exception;

class InvalidQuantityException extends BusinessRuleViolation {
    public function __construct() {
        parent::__construct("La cantidad vendida debe ser mayor que cero.");
    }
}
