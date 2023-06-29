<?php

declare(strict_types=1);

namespace PhpMutantTesting\Application;

final readonly class UpdateStockCommand
{
    public function __construct(public string $id, public int $quantity)
    {
    }
}
