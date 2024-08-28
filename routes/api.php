<?php

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

Route::get('/users', function (Request $request) {
    // dump($request);
    return new JsonResponse([
        'data' => 'users'
    ]);
});

Route::get('/users/{user}', function (Request $request, User $user) {
    dump($request);
    return new JsonResponse([
        'data' => $user
    ]);
});
//post request

Route::post('/users/{user}', function (User $user) {
    // dump($request);
    return new JsonResponse([
        'data' => 'Post Request '
    ]);
});

// patch users request

Route::patch('/users/{user}', function (User $user) {
    // dump($request);
    return new JsonResponse([
        'data' => 'patch request'
    ]);
});

// delete users request

Route::delete('/users/{user}', function (User $user) {
    // dump($request);
    return new JsonResponse([
        'data' => 'Delete Request '
    ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
