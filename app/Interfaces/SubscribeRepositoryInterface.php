<?php

namespace App\Interfaces;

interface SubscribeRepositoryInterface 
{
    public function createSubscriber(array $subscriberDetails);
}