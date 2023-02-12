<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Subscriber;

class SubscribeControllerTest extends TestCase
{
    /**
     * @test
    */
    public function store_test()
    {
        $requestData = [
            'email' => 'test@test.test',
            'price_limit' => 22
        ];
        $response = $this->post('/subscribe', $requestData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('subscribers', $requestData);
        $this->deleteSubscriber();
    }

    /**
     * @test
    */
    public function store_wrong_request_test()
    {
        $requestData = [
            'email' => 'testtest.test',
            'price_limit' => 'ss'
        ];
        $response = $this->post('/subscribe', $requestData);

        $response->assertStatus(422);
        $this->assertDatabaseMissing('subscribers', $requestData);

    }

    private function deleteSubscriber()
    {
        Subscriber::where('email', 'test@test.test')->delete();
    }
}
