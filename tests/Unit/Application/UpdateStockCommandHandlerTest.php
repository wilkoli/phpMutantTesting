<?php

declare(strict_types=1);

namespace Test\PhpMutantTesting\Unit\Application;

use PhpMutantTesting\Application\UpdateStockCommand;
use PhpMutantTesting\Application\UpdateStockCommandHandler;
use PhpMutantTesting\Domain\StockRepository;
use PHPUnit\Framework\TestCase;

final class UpdateStockCommandHandlerTest extends TestCase
{

    public function test_update_quantity_correctly(): void
    {
        $stockRepository = $this->createMock(StockRepository::class);
        $handler = new UpdateStockCommandHandler($stockRepository);
        $command = new UpdateStockCommand('38bb4ff4-212e-434f-8db9-2afd8f0708c9', 3);
        $handlerResult = $handler($command);

        self::assertNull($handlerResult);
    }
}
