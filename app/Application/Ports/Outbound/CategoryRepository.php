<?php
namespace App\Application\Ports\Outbound;

use App\Domain\Model\Category;

interface CategoryRepository {
    public function findAll(): array;
}
