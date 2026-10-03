<?php
namespace App\Application\Exception;

class ProductNotFoundException extends \Exception {
    public function __construct() {
        parent::__construct("Producto no encontrado.");
    }
}
