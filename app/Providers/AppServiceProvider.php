<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\BitfinexServiceInterface;
use App\Services\BitfinexService;
use App\Interfaces\NotificationServiceInterface;
use App\Services\NotificationService;

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
        $this->app->bind(NotificationServiceInterface::class, NotificationService::class);
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
