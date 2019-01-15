<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Fundation\Aplication;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment()=='production'){
            URL::forceScheme('http');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
