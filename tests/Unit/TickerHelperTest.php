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
        $stdclass = new stdClass();
        $stdclass->mid = "2232";
        $stdclass->bid = "46.21";
        $stdclass->ask = "42.44";
        $stdclass->last_price = "231.55";
        $stdclass->low = "2.55";
        $stdclass->high = "24.66";
        $stdclass->volume = "2.55";

        $data = (new TickerHelper())->castElementToFloat($stringArray);

        $this->assertIsArray($data);
        foreach ($data as $item) {
            $this->assertTrue(is_float($item));
        }
    }
}
