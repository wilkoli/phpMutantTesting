<?php

declare(strict_types=1);

namespace Tests\PhpMutantTesting\Unit\Domain;

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

    public function usersProvider()
    {
        return [
            [
                [
                    ['age' => 15],
                    ['age' => 20],
                ],
                1
            ],
            [
                [
                    ['age' => 18],
                ],
                1
            ]
        ];
    }
}
