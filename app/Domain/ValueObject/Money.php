<?php
namespace App\Domain\ValueObject;

use App\Domain\Exception\InvalidPriceException;
use Brick\Math\BigDecimal;
use Brick\Math\RoundingMode;

class Money {
    private BigDecimal \;

    public function __construct(string \) {
        \ = BigDecimal::of(\)->toScale(2, RoundingMode::HALF_UP);
        if (\->isLessThanOrEqualTo(BigDecimal::zero())) {
            throw new InvalidPriceException();
        }
        \->amount = \;
    }

    public function amount(): BigDecimal {
        return \->amount;
    }
    
    public function multiply(int \): BigDecimal {
        return \->amount->multipliedBy(\)->toScale(2, RoundingMode::HALF_UP);
    }
}
