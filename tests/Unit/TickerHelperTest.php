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
    public function test_convertMehod()
    {
        $stdclass = new stdClass();
        $stdclass->mid = "2232";
        $stdclass->bid = "46.21";
        $stdclass->ask = "42.44";
        $stdclass->last_price = "231.55";
        $stdclass->low = "2.55";
        $stdclass->high = "24.66";
        $stdclass->volume = "2.55";

        $data = (new TickerHelper())->convertObjectToArray($stdclass);

        $this->assertIsArray($data);
        $this->assertArrayHasKey('mid', $data);
        $this->assertArrayHasKey('bid', $data);
        $this->assertArrayHasKey('ask', $data);
        $this->assertArrayHasKey('last_price', $data);
        $this->assertArrayHasKey('low', $data);
        $this->assertArrayHasKey('high', $data);
        $this->assertArrayHasKey('volume', $data);
    }
}
