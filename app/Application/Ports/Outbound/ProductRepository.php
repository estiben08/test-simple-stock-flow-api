<?php
namespace App\Application\Ports\Outbound;

use App\Domain\Model\Product;

interface ProductRepository {
    public function findById(string \): ?Product;
    public function save(Product \): void;
    public function findAll(): array;
    public function delete(string \): void;
}
