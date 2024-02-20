<?php

declare(strict_types=1);

namespace Test;

use KeyNormalizer\KeyNormalizer;
use PHPUnit\Framework\TestCase;

class KeyNormalizerTest extends TestCase
{
    /**
     * @dataProvider dataProviderCamel
     */
    public function testCamel(string $input, string $expected): void
    {
        $this->assertEquals($expected, KeyNormalizer::toCamelCase($input));
    }

    public function dataProviderCamel(): array
    {
        return [
            [
                'test',
                'test',
            ],
            [
                'test_test',
                'testTest',
            ],
            [
                'test_test_test',
                'testTestTest',
            ],
            [
                'Test_Test_test',
                'testTestTest',
            ],
        ];
    }

    /**
     * @dataProvider dataProviderSnake
     * @group +
     */
    public function testSnake(string $input, string $expected): void
    {
        $this->assertEquals($expected, KeyNormalizer::toSnakeCase($input));
    }

    public function dataProviderSnake(): array
    {
        return [
            [
                'test',
                'test',
            ],
            [
                'testTest',
                'test_test',
            ],
            [
                'TestTestTest',
                'test_test_test',
            ],
        ];
    }
}
