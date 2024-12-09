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
        // Paginator::useBootstrap();
        Blade::component('user.components.layout', 'layout');
        Blade::component('user.components.nav-bar', 'nav-bar');
        Blade::component('user.components.footer', 'footer');

        Blade::component('admin.Components.navBar', 'navBar');
        Blade::component('admin.Components.layouts', 'layouts');
        Blade::component('admin.Components.nav-link', 'nav-link');
        Blade::component('admin.Components.footer', 'footer');


        

    }
}
