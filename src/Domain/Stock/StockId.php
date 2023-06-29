<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain\Stock;

final readonly class StockId
{
    public function __construct(public string $value)
    {
    }
}
