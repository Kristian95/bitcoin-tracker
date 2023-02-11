<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\BitfinexServiceInterface;
use App\Services\BitfinexService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BitfinexServiceInterface::class, BitfinexService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
