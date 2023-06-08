<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

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

Route::get('/pijan', fn () => response(['name' => 'Hafizan']));

Route::group(['as' => 'api.'], function() {
    Orion::resource('posts', App\Http\Controllers\Api\PostsController::class);
});

Route::middleware(['auth:sanctum'])->group(function() {

    Route::get('/user', fn (Request $request) => $request->user());

});

