<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain;

use PhpMutantTesting\Domain\Stock\Stock;
use PhpMutantTesting\Domain\Stock\StockId;

interface StockRepository
{
    public function get(StockId $stockId): Stock;
    public function update(Stock $stock): void;
}
