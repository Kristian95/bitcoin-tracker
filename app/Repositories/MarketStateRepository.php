<?php

namespace App\Repositories;

use App\Interfaces\MarketStateRepositoryInterface;
use App\Models\MarketState;
use Illuminate\Support\Facades\DB;

class MarketStateRepository implements MarketStateRepositoryInterface
{
    public function create(array $marketState)
    {
        return MarketState::create($marketState);
    }

    public function fetchData(): array
    {
        return MarketState::select(
            DB::raw('month(created_at) as month, sum(mid) as mid, SUM(bid) as bid, SUM(ask) as ask, SUM(last_price) as last_price, SUM(low) as low, SUM(high) as high, SUM(volume) as volume'),
        )->groupby('month')
        ->get()
        ->toArray();
    }
}
