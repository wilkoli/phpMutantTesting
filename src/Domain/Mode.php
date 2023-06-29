<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain;

enum Mode: string
{
    case SUM = 'sum';
    case MIN = 'min';
}
