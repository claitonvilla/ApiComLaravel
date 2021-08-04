<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;

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



Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);


Route::middleware('auth:api')->group(function () {

    Route::get('user-list', [UserController::class, 'Userlist']);

    // List artigos
    Route::get('artigos', [ArtigoController::class, 'index']);

    // List single artigo
    Route::get('artigo/{id}', [ArtigoController::class, 'show']);

    // Create new artigo
    Route::post('artigo', [ArtigoController::class, 'store']);

    // Update artigo
    Route::put('artigo/{id}', [ArtigoController::class, 'update']);

    // Delete artigo
    Route::delete('artigo/{id}', [ArtigoController::class, 'destroy']);

    Route::group(['prefix' => 'compras'], function(){

    });
});
