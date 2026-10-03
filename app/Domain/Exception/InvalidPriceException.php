<?php
namespace App\Domain\Exception;

class InvalidPriceException extends BusinessRuleViolation {
    public function __construct() {
        parent::__construct("El precio debe ser mayor que cero.");
    }
}
