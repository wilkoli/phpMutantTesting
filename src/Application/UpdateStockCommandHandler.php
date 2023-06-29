<?php

declare(strict_types=1);

namespace PhpMutantTesting\Application;

use PhpMutantTesting\Domain\Stock\Quantity;
use PhpMutantTesting\Domain\Stock\StockId;
use PhpMutantTesting\Domain\StockRepository;

final class UpdateStockCommandHandler
{
    public function __construct(private StockRepository $repository)
    {
    }

    public function __invoke(UpdateStockCommand $command)
    {
        $stockId = new StockId($command->id);
        $stock = $this->repository->get($stockId);

        $quantity = new Quantity($command->quantity);
        $stock->updateQuantity($quantity);

        $this->repository->update($stock);
    }
}
