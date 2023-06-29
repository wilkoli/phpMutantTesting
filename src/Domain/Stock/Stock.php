<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain\Stock;

class Stock
{
    public function __construct(public StockId $id, public Quantity $quantity)
    {
    }

    public function updateQuantity(Quantity $quantity)
    {
        $this->quantity = $quantity;
    }
}
