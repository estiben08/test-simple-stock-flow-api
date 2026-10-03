<?php
namespace App\Application\UseCase;

use App\Application\Ports\Outbound\ProductRepository;
use App\Domain\Model\Product;
use App\Domain\ValueObject\Money;
use Ramsey\Uuid\Uuid;

class CatalogService {
    public function __construct(private ProductRepository \) {}

    public function getCatalog(): array {
        return \->productRepository->findAll();
    }

    public function createProduct(string \, string \, int \, string \): string {
        \ = Uuid::uuid4()->toString();
        \ = new Money(\);
        \ = new Product(\, \, \, \, \);
        \->productRepository->save(\);
        return \;
    }
}
