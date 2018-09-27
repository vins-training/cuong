<?php

namespace CUONGNQ\SimpleAdmin;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('CUONGNQ\SimpleAdmin\CuongController');
        $this->loadViewsFrom(__DIR__.'/views', 'package');
    }
}
