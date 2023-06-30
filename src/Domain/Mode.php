<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain;

enum Mode: string
{
    case ABSOLUTE = 'absolute';
    case RELATIVE = 'relative';
}
