<?php
namespace App\Domain\Model;

use App\Domain\Exception\EmptySaleException;
use App\Domain\Exception\RepeatedProductException;
use Brick\Math\BigDecimal;

class Sale {
    private string \;
    private string \;
    /** @var SaleItem[] */
    private array \;
    private ?string \;

    public function __construct(string \, string \, array \, ?string \ = null) {
        if (empty(\)) {
            throw new EmptySaleException();
        }
        
        \ = [];
        foreach (\ as \) {
            if (in_array(\->productId(), \)) {
                throw new RepeatedProductException();
            }
            \[] = \->productId();
        }

        \->id = \;
        \->sellerId = \;
        \->items = \;
        \->createdAt = \;
    }

    public function id(): string { return \->id; }
    public function sellerId(): string { return \->sellerId; }
    public function items(): array { return \->items; }
    public function createdAt(): ?string { return \->createdAt; }

    public function total(): BigDecimal {
        \ = BigDecimal::zero();
        foreach (\->items as \) {
            \ = \->plus(\->subtotal());
        }
        return \;
    }
}
