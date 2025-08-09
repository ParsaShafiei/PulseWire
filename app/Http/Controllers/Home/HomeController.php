<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $topSelectedPosts = Post::where('selected', 1)->orderby('created_at', 'desc')->limit(3)->get();
        $breakingNews = Post::where('breaking_news', 1)->orderBy('created_at', 'desc')->limit('1')->first();
        $latestNews = Post::orderBy('created_at', 'desc')->limit(6)->get();
        $popularNews = Post::orderBy('view', 'desc')->limit(3)->get();
        $bodybanner = Banner::orderBy('created_at', 'desc')->limit(1)->first();
        return view('app.index', compact('topSelectedPosts', 'breakingNews', 'latestNews', 'popularNews', 'bodybanner'));
    }
    public function show() {}
    public function category() {}
}