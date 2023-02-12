<?php

namespace Tests\Unit;

use App\Helpers\TickerHelper;
use PHPUnit\Framework\TestCase;
use stdClass;

class TickerHelperTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function test_array_float()
    {
        $stringArray = [
            'mid' => "2232",
            'bid' => "2232",
            'ask' => "2232",
            'last_price' => "2232",
            'low' => "2232",
            'high' => "2232",
            'volume' => "2232",
        ];

        $data = (new TickerHelper())->castElementToFloat($stringArray);

        $this->assertIsArray($data);
        foreach ($data as $item) {
            $this->assertTrue(is_float($item));
        }
    }
}
