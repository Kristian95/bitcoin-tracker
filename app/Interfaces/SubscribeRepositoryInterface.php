<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface SubscribeRepositoryInterface 
{
    public function createSubscriber(array $subscriberDetails);
    public function getSubscribersByPrice(float $price): Collection;
}