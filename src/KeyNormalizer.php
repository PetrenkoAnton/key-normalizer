<?php

declare(strict_types=1);

namespace KeyNormalizer;

class KeyNormalizer
{
    public static function normalize(string $input): string
    {
        return \lcfirst(\str_replace(' ', '', \ucwords(\str_replace('_', ' ', $input))));
    }
}