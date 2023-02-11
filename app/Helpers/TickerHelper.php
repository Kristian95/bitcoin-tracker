<?php

namespace App\Helpers;

class TickerHelper
{
    public static function convertObjectToArray(object $object): array
    {
        return [
            'mid' => floatval($object->mid),
            'bid' => floatval($object->bid),
            'ask' => floatval($object->ask),
            'last_price' => floatval($object->last_price),
            'low' => floatval($object->low),
            'high' => floatval($object->high),
            'volume' => floatval($object->volume),
        ];
    }
}