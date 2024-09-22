<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::all();
    return view('welcome',compact('posts'));

});


Route::get('/posts/view/{id}', function ($id) {
    $post = Post::findOrFail($id);
    return view('posts.viewpost', compact('post'));
});







Route::middleware([AdminMiddleware::class])->group(function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
