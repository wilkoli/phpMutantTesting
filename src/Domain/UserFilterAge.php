<?php

namespace PhpMutantTesting\Domain;

class UserFilterAge
{
    const MAX_AGE = 18;
    public function __invoke(array $collection)
    {
        return array_filter(
            $collection,
            function (array $item) {
                return $item['age'] >= self::MAX_AGE;
            }
        );
    }
}