<?php

namespace App\Providers;

use App\ChangellyHelper;
use App\Repo\IpFinder;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('IpFinder',function($app){

            return new IpFinder($app->make('IpFinder'));

        });

        $this->app->bind('ChangellyHelper',function ($app){

            return new ChangellyHelper($app->make('ChangellyHelper'));
        });
    }
}
