<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Post;
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
        $topSelectedPosts = Post::where('selected', 1)->orderby('created_at', 'desc')->limit(3)->get();
        // dd($topSelectedPosts);
        view()->share('topSelectedPosts', $topSelectedPosts);
        $mostCommentedPosts = Post::withCount('comments')->orderBy('comments_count', 'desc')->limit(5)->get();
        view()->share('mostCommentedPosts', $mostCommentedPosts);
    }
}
