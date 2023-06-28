<?php

declare(strict_types=1);

namespace Test\PhpMutantTesting\Unit\Domain;

use PHPUnit\Framework\TestCase;
use PhpMutantTesting\Domain\Money;

class MoneyTest extends TestCase
{
    public function testMoney(): void
    {
        $money = Money::withAmountAndCurrency(
            1595,
            'EUR'
        );

        self::assertEquals(1595, $money->centAmount);
        self::assertEquals(15.95, $money->floatAmount());
       // self::assertEquals('15,95 €', $money->formatPrice('ES'));
        self::assertEquals('EUR', $money->currencyCode);
    }
}
