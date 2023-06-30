<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain;

class Calculator
{
    public function add(int $value, int $anotherValue, Mode $mode): int
    {
        if ($mode === Mode::ABSOLUTE) {
            $value = abs($value);
            $anotherValue = abs($anotherValue);
        }
        return $value + $anotherValue;
    }
}
