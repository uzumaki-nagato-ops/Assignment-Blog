<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

// SHOW login page
Route::get('/login', function () {
    return view('welcome');
})->name('login');

// PROCESS login
Route::post('/login', [AuthController::class, 'login']);

// PROCESS register
Route::post('/register', [AuthController::class, 'register']);

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// LOGOUT
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::middleware('auth')->group(function () {

    // show create post form
    Route::get('/posts/create', [PostController::class, 'create']);

    // save post
    Route::post('/posts', [PostController::class, 'store']);

});

Route::get('/dashboard', function () {
    $posts = Post::where('user_id', auth()->id())->latest()->get();
    return view('dashboard', compact('posts'));
})->middleware('auth');

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{slug}', [PostController::class, 'show']);

Route::middleware('auth')->group(function () {

    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);

});