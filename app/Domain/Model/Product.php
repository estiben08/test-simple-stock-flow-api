<?php
namespace App\Domain\Model;

use App\Domain\Exception\InsufficientStockException;
use App\Domain\ValueObject\Money;

class Product {
    private string \;
    private string \;
    private Money \;
    private int \;
    private string \;
    private ?string \;

    public function __construct(string \, string \, Money \, int \, string \, ?string \ = null) {
        if (\ < 0) {
            throw new InsufficientStockException();
        }
        \->id = \;
        \->name = \;
        \->price = \;
        \->stock = \;
        \->categoryId = \;
        \->imageUrl = \;
    }

    public function id(): string { return \->id; }
    public function name(): string { return \->name; }
    public function price(): Money { return \->price; }
    public function stock(): int { return \->stock; }
    public function categoryId(): string { return \->categoryId; }
    public function imageUrl(): ?string { return \->imageUrl; }

    public function decreaseStock(int \): void {
        if (\->stock - \ < 0) {
            throw new InsufficientStockException();
        }
        \->stock -= \;
    }
}
