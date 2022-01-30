<?php

namespace App\Providers;

use App\View\Components\NavItem;
use App\View\Components\Stylesheet;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('path.public', function() {
            return base_path('public_html');
        });
        
        Blade::component('components.stylesheet', Stylesheet::class);
        Blade::component('components.nav-item', NavItem::class);
    }
}
