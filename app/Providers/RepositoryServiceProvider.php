<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SubscribeRepository;
use App\Interfaces\SubscribeRepositoryInterface;
use App\Repositories\MarketStateRepository;
use App\Interfaces\MarketStateRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SubscribeRepositoryInterface::class, SubscribeRepository::class);
        $this->app->bind(MarketStateRepositoryInterface::class, MarketStateRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
