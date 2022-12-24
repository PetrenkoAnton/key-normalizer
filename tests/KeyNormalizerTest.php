<?php

declare(strict_types=1);

namespace Test;

use KeyNormalizer\KeyNormalizer;
use PHPUnit\Framework\TestCase;

class KeyNormalizerTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testNormalize(string $input, string $output): void
    {
        $this->assertEquals($output, KeyNormalizer::normalize($input));
    }

    public function dataProvider(): array
    {
        return [
            [
                'input' => 'test',
                'output' => 'test',
            ],
            [
                'input' => 'test_test',
                'output' => 'testTest',
            ],
            [
                'input' => 'test_test_test',
                'output' => 'testTestTest',
            ],
            [
                'input' => 'test___test___test_test',
                'output' => 'testTestTestTest',
            ],
            [
                'input' => '___test___',
                'output' => 'test',
            ],
        ];
    }
}
