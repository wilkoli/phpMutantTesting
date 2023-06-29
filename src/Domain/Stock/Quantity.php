<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain\Stock;

final class Quantity
{
    public function __construct(public int $value)
    {
    }
}
