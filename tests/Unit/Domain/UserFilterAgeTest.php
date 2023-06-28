<?php

declare(strict_types=1);

namespace Test\PhpMutantTesting\Unit\Domain;

use Generator;
use PhpMutantTesting\Domain\UserFilterAge;
use PHPUnit\Framework\TestCase;

class UserFilterAgeTest extends TestCase
{
    /** @dataProvider usersProvider */
    public function test_it_filters_adults(array $collection, int $expectedCount): void
    {
        $filter = new UserFilterAge();
        $this->assertCount($expectedCount, $filter($collection));
    }

    public function usersProvider(): Generator
    {
        yield 'collection contains ages greater than 18' => [
            [
                ['age' => 15],
                ['age' => 20],
                ['age' => 24],
            ],
            2
        ];

    }
}

/*
 yield 'collection contains age equal to 18' => [
            [
                ['age' => 18],
            ],
            1
        ];
 */