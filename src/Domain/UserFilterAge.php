<?php

declare(strict_types=1);

namespace PhpMutantTesting\Domain;

class UserFilterAge
{
    //private const MAX_AGE = 18;

    public function __invoke(array $collection): array
    {
        $maxAge = 18;

        return array_filter(
            $collection,
            function (array $item) use ($maxAge) {
                return $item['age'] >= $maxAge;
            }
        );
    }
}
