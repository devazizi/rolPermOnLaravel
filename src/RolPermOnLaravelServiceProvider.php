<?php

namespace DevAzizi\RolPermOnLaravel;

use \Illuminate\Support\ServiceProvider;

class RolPermOnLaravelServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom('./../config');
        $this->loadMigrationsFrom('./../database/migration');
    }

    public function boot(): void
    {

    }
}
