<?php

declare(strict_types=1);

namespace Test\PhpMutantTesting\Unit\Domain\Stock;

use PhpMutantTesting\Domain\Stock\Quantity;
use PhpMutantTesting\Domain\Stock\Stock;
use PhpMutantTesting\Domain\Stock\StockId;
use PHPUnit\Framework\TestCase;

final class StockTest extends TestCase
{

    public function test_updateQuantity_correctly(): void
    {
        $stock = new Stock(new StockId("8ee0f799-3545-4bce-90fd-ee16edd3f414"), new Quantity(3));
        $stock->updateQuantity(new Quantity(10));

        self::assertEquals(10, $stock->quantity->value);
    }
}
