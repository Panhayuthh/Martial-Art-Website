<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginator::useBootstrapFive();
        Blade::component('user.components.layout', 'layout');
        Blade::component('user.components.nav-bar', 'nav-bar');
        Blade::component('user.components.footer', 'footer');
    }
}
