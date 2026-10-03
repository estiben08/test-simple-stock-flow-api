<?php
namespace App\Domain\Exception;

class InsufficientStockException extends BusinessRuleViolation {
    public function __construct() {
        parent::__construct("Stock insuficiente para completar la venta.");
    }
}
