<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\SiteSetting;
use Illuminate\Support\ServiceProvider;

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
        $setting = SiteSetting::first();
        view()->share('setting', $setting);
        $menus = Menu::whereNull('parent_id')->get();
        view()->share('menus', $menus);
    }
}