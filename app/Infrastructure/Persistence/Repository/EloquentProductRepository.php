<?php
namespace App\Infrastructure\Persistence\Repository;

use App\Application\Ports\Outbound\ProductRepository;
use App\Domain\Model\Product;
use App\Domain\ValueObject\Money;
use App\Infrastructure\Persistence\Eloquent\ProductEloquent;

class EloquentProductRepository implements ProductRepository {
    public function findById(string \): ?Product {
        \ = ProductEloquent::find(\);
        if (!\) return null;
        return new Product(
            \->id,
            \->name,
            new Money((string) \->price),
            \->stock,
            \->category_id,
            \->image_url
        );
    }

    public function save(Product \): void {
        ProductEloquent::updateOrCreate(
            ['id' => \->id()],
            [
                'name' => \->name(),
                'price' => (string) \->price()->amount(),
                'stock' => \->stock(),
                'category_id' => \->categoryId(),
                'image_url' => \->imageUrl()
            ]
        );
    }
    
    public function findAll(): array { return []; }
    public function delete(string \): void {}
}
