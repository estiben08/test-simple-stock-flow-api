<?php
namespace App\Domain\Model;

use App\Domain\ValueObject\Money;
use App\Domain\ValueObject\Quantity;
use Brick\Math\BigDecimal;

class SaleItem {
    private string \;
    private string \;
    private string \;
    private Quantity \;
    private Money \;

    public function __construct(string \, string \, string \, Quantity \, Money \) {
        \->productId = \;
        \->productName = \;
        \->categoryName = \;
        \->quantity = \;
        \->unitPrice = \;
    }

    public function productId(): string { return \->productId; }
    public function productName(): string { return \->productName; }
    public function categoryName(): string { return \->categoryName; }
    public function quantity(): Quantity { return \->quantity; }
    public function unitPrice(): Money { return \->unitPrice; }

    public function subtotal(): BigDecimal {
        return \->unitPrice->multiply(\->quantity->value());
    }
}
