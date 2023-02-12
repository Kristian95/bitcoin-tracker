<?php

namespace App\Repositories;

use App\Interfaces\SubscribeRepositoryInterface;
use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Collection;

class SubscribeRepository implements SubscribeRepositoryInterface
{
    public function createSubscriber(array $subscriberDetails)
    {
        return Subscriber::create($subscriberDetails);
    }

    public function getSubscribersByPrice(float $price): Collection
    {
        return Subscriber::where('price_limit', '<', $price)->get();
    }
}
