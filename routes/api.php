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

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{user}', [UserController::class,'show']);
//post request
Route::post('/users/{user}',[UserController::class,'store']);
// patch users request
Route::patch('/users/{user}',[UserController::class,'update']);
// delete users request
Route::delete('/users/{user}',[UserController::class,'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
