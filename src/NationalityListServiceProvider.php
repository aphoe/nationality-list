<?php
namespace Dinushchathurya\NationalityList;

use Illuminate\Support\ServiceProvider;

class NationalityListServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishResources();
        
    }

    public function register()
    {
        $this->publishes([
            __DIR__ . '/database/seeders/' => base_path('database/seeders/'),
        ]);
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__ . '/database/migrations/2022_03_08_155752_create_nationality_lists_table.php' => database_path('migrations/2022_03_08_155752_create_nationality_lists_table.php'),
        ], 'nationality-migrations');

        
        $this->publishes([
            __DIR__. '/database/seeders/NationalityListTableSeeder.php' => database_path('seeders/NationalityListTableSeeder.php'),
        ], 'nationality-seeders');
    }
}
