<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SubscribeRepository;
use App\Interfaces\SubscribeRepositoryInterface;

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
