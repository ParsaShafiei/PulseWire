<?php

use App\Http\Controllers\Admin\BannerController as BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WebSetting;
use App\Http\Controllers\ProfileController;
use App\Models\SiteSetting;
use App\Models\User;
use Dom\Comment;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



require __DIR__ . '/auth.php';


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', DashboardController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::get('post/breaking-news/{post}', [PostController::class, 'breaking_news'])->name('post.breaking-news');
    Route::get('post/selected/{post}', [PostController::class, 'selected'])->name('post.selected');
    Route::resource('banner', BannerController::class);
    Route::resource('comment', CommentController::class);
    Route::resource('user', UserController::class);
    Route::get('user/changestatus/{user}', [UserController::class, 'changePermission'])->name('user.changestatus');
    Route::resource('menu', MenuController::class);


    Route::get('web-setting', [WebSetting::class, 'index'])->name('websetting.index');
    Route::get('web-setting/edit', [WebSetting::class, 'edit'])->name('websetting.edit');
    Route::put('web-setting/store', [WebSetting::class, 'store'])->name('websetting.store');
});
Route::patch('/admin/comments/{comment}/approve', [CommentController::class, 'approve'])->name('admin.comments.approve');
Route::patch('/admin/comments/{comment}/unapprove', [CommentController::class, 'unapprove'])->name('admin.comments.unapprove');
