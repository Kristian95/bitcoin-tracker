<?php

namespace App\Services;

use App\Interfaces\BitfinexServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;
use App\Helpers\TickerHelper;

class BitfinexService implements BitfinexServiceInterface
{
    public function getTickerData(): array
    {
        try {
            $response = (new Client())->request('GET', 'https://api.bitfinex.com/v1/pubticker/BTCUSD', [
              'headers' => [
                'accept' => 'application/json',
              ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return TickerHelper::castElementToFloat($data);
        } catch (GuzzleException $exception) {
            Log::error($exception);
            return [];
        }
    }
}