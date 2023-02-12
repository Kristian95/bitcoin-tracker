<?php

namespace App\Helpers;

class TickerHelper
{
    public static function castElementToFloat(array $array): array
    {
        return array_map('floatval', $array);
    }
}