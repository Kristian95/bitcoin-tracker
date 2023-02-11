<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketState extends Model
{
    protected $table = 'market_state';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mid',
        'bid',
        'ask',
        'last_price',
        'low',
        'high',
        'volume',
    ];
}
