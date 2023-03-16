<?php

namespace DevAzizi\RolPermOnLaravel;

use \Illuminate\Support\ServiceProvider;

class RolPermOnLaravelServiceProvider extends ServiceProvider
{
    public function register(): void
    {
//        $this->mergeConfigFrom('./../config', 'rolPermOnLaravel');
    }

    public function boot(): void
    {
        dump('hello package', __DIR__ . '/../../database/migration');
        $this->loadMigrationsFrom(__DIR__ . '../../database/migrations');
    }
}
