<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





// Route::get('/posts', [PostController::class,'index'])->name('posts.index');
// Route::post('/posts', [PostController::class,'store'])->name('posts.store');


Route::resource('posts',PostController::class);

// Route::middleware()
//     ->group(function () {

//         Route::get('/posts', [PostController::class,'index'])->name('posts.index');
//     });
