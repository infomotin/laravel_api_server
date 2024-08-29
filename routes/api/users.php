<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::apiResource('users', UserController::class);


Route::group([
    'middleware' => [
        'auth:sanctum',
    ],
    'prefix' => 'users',
    'as' => 'users.',
    'namespace' => 'App\Http\Controllers',

], function () {
    Route::get('/users', [UserController::class, 'index'])->name('index');
    // Route::get('/users', 'UserController@index')->name('index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('show');
    Route::post('/users/{user}', [UserController::class, 'store'])->name('store');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('destroy');
});

// Route::middleware('auth')
//     // ->prefix('api')
//         ->name('users.')
//         ->namespace('App\Http\Controllers')
//         ->group(function () {
//         Route::get('/users', [UserController::class, 'index'])->name('index');
//         // Route::get('/users', 'UserController@index')->name('index');
//         Route::get('/users/{user}', [UserController::class, 'show'])->name('show');
//         Route::post('/users/{user}', [UserController::class, 'store'])->name('store');
//         Route::patch('/users/{user}', [UserController::class, 'update'])->name('update');
//         Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('destroy');
//     });

