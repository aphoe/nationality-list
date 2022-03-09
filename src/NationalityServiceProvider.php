<?php

namespace Dinushchathurya\NationalityList;

use Illuminate\Support\ServiceProvider;

class NationalityListServiceProvider extends ServiceProvider
{

    public function boot()
    {   
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {
        $this->publishes([
            __DIR__ . '/database/seeders/' => base_path('database/seeders/'),
        ]);
    }
}