<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain;

use NumberFormatter;

final class Money
{
    private function __construct(
        public int $centAmount,
        public readonly string $currencyCode
    ) {
    }

    public static function withAmountAndCurrency(int $centAmount, string $currencyCode): self
    {
        return new self($centAmount, $currencyCode);
    }

    public function floatAmount(): float
    {
        return $this->centAmount / 100;
    }

    public function formatPrice(string $country): string
    {
        /** @var string $formatPrice */
        $formatPrice = (new NumberFormatter($country, NumberFormatter::CURRENCY))
            ->formatCurrency($this->floatAmount(), $this->currencyCode);

        return $formatPrice;
    }
}
