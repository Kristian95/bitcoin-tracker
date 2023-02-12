<?php

namespace App\Interfaces;

interface MarketStateRepositoryInterface 
{
    public function create(array $maketState);
    public function fetchData(): array;
}