<?php

declare(strict_types=1);

namespace KeyNormalizer;

use function lcfirst;
use function preg_replace;
use function str_replace;
use function strtolower;
use function ucwords;

class KeyNormalizer
{
    public static function toCamelCase(string $key): string
    {
        return lcfirst(str_replace('_', '', ucwords($key, '_')));
    }

    public static function toSnakeCase(string $key): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key));
    }
}
