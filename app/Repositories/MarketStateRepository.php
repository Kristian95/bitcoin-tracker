<?php

namespace App\Repositories;

use App\Interfaces\MarketStateRepositoryInterface;
use App\Models\MarketState;

class MarketStateRepository implements MarketStateRepositoryInterface
{
    public function create(array $marketState)
    {
        return MarketState::create($marketState);
    }
}
