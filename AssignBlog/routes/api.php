<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [BlogApiController::class, 'posts']);
Route::get('/posts/{slug}', [BlogApiController::class, 'show']);

Route::get('/posts/{slug}/comments', [BlogApiController::class, 'comments']);
Route::post('/posts/{slug}/comments', [BlogApiController::class, 'storeComment']);