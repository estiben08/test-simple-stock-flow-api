<?php
namespace App\Domain\Exception;

class RepeatedProductException extends BusinessRuleViolation {
    public function __construct() {
        parent::__construct("Un producto no puede repetirse dentro de una misma venta.");
    }
}
