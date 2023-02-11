<?php

namespace App\Repositories;

use App\Interfaces\SubscribeRepositoryInterface;
use App\Models\Subscriber;

class SubscribeRepository implements SubscribeRepositoryInterface
{
    public function createSubscriber(array $subscriberDetails)
    {
        return Subscriber::create($subscriberDetails);
    }
}
