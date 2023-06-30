<?php

declare(strict_types=1);

namespace Test\PhpMutantTesting\Unit\Domain;

use Generator;
use PhpMutantTesting\Domain\Calculator;
use PhpMutantTesting\Domain\Mode;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @dataProvider modeProvider */
    public function testAdd(int $value, int $anotherValue, Mode $mode, int $expectedResult): void
    {
        $calculator = new Calculator();
        self::assertEquals($expectedResult, $calculator->add($value, $anotherValue, $mode));
    }

    public function modeProvider(): Generator
    {
        yield 'operate with absolute values' => [
            2,
            2,
            Mode::ABSOLUTE,
            4
        ];

    }
}

/*
 yield 'operate without absolute values' => [
            2,
            -2,
            Mode::RELATIVE,
            0
        ];
 */