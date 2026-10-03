<?php
namespace App\Application\Ports\Outbound;

use App\Domain\Model\Sale;

interface SaleRepository {
    public function save(Sale \): void;
    public function findById(string \): ?Sale;
    public function findAll(): array;
}
