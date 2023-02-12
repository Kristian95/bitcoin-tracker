<?php

namespace Tests\Feature;

use Tests\TestCase;

class MarketStateControllerTest extends TestCase
{
    /**
     * @test
    */
    public function get_data_test()
    {
        $response = $this->get('/get-data');

        $response->assertStatus(200);

        $resposeData = json_decode($response->getContent());

        $this->assertTrue($resposeData->success);
        $this->assertIsArray($resposeData->data);
    }
}
