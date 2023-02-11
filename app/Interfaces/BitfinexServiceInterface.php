<?php

namespace App\Interfaces;

interface BitfinexServiceInterface 
{
    public function getTickerData(): array;
}