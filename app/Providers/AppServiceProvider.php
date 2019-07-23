<?php

namespace App\Providers;

use App\Repo\IpFinder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('getIp',function($app){

            return new IpFinder($app->make('getIp'));

        });
    }
}
