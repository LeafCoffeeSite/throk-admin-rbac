<?php

namespace Leafcoffee\ThrokAdminRbac;

use Illuminate\Support\ServiceProvider;
use Leafcoffee\ThrokAdminRbac\Services\ThrokAdminRbacService;

class ThrokAdminRbacProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(ThrokAdminRbacService::class,function ($app){
            return new ThrokAdminRbacService();
        });
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
