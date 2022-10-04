<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TokoController;
use App\Http\Controllers\Api\AlamatTokoController;
use App\Http\Controllers\Api\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//api login 
Route::post('login', [AuthController::class, 'login']);

//api register
Route::post('register', [AuthController::class, 'register']);

//api update user
Route::put('update-user/{id}', [AuthController::class, 'update']);

Route::post('upload-user/{id}', [AuthController::class, 'upload']);

Route::resource('toko', TokoController::class);
Route::get('toko-user/{id}', [TokoController::class, 'cekToko']);
Route::resource('alamat-toko', AlamatTokoController::class);
// Route::post('login', [AuthController::class, 'login']);
// Route::post('register', [AuthController::class, 'register']);
Route::post('products', [ProductController::class, 'store']);


