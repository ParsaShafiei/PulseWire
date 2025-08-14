<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $popularNews = Post::orderBy('view', 'desc')->limit(3)->get();
        $bodybanner = Banner::orderBy('created_at', 'desc')->limit(1)->first();
        // dd($popularNews);
        return view('app.index', compact('popularNews', 'bodybanner'));
    }
    public function show(Post $post)
    {
        $post->increment('view');
        return view('app.show', compact('post'));
    }
    public function category(Category $category)
    {
        $category->load('posts');

        $latestNews = $category->posts()->latest()->limit(6)->get();
        $popularNews = Post::where('category_id', $category->id)->get();
        // dd($popularNews);
        return view('app.category', compact('category', 'latestNews', 'popularNews'));
    }

    public function commentStore(Post $post, Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'body' => 'required|min:3|max:1000'
            ]);
            $inputs = $request->all();
            $inputs['user_id'] = Auth::user()->id;
            $inputs['post_id'] = $post->id;
            // dd($inputs);
            Comment::create($inputs);
            return back();
        } else {
            return back();
        }
    }
}
