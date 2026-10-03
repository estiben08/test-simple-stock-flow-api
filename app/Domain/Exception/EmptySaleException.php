<?php
namespace App\Domain\Exception;

class EmptySaleException extends BusinessRuleViolation {
    public function __construct() {
        parent::__construct("Una venta debe tener al menos una línea.");
    }
}
