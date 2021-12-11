<?php

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

Route::get('/products', [App\Http\Controllers\ProductApiController::class , 'index']);
Route::get('/product/{id}', [App\Http\Controllers\ProductApiController::class , 'show']);
Route::post('/product-store', [App\Http\Controllers\ProductApiController::class , 'store']);
Route::delete('/product-delete/{id}' , [App\Http\Controllers\ProductApiController::class , 'destroy']);

Route::get('/carts', [App\Http\Controllers\CartApiController::class , 'index']);
Route::get('/cart/{id}', [App\Http\Controllers\CartApiController::class , 'show']);
Route::post('/cart-store', [App\Http\Controllers\CartApiController::class , 'store']);
Route::delete('/cart-delete/{id}' , [App\Http\Controllers\CartApiController::class , 'destroy']);

Route::get('/cities', [App\Http\Controllers\CityApiController::class , 'index']);
Route::get('/city/{id}', [App\Http\Controllers\CityApiController::class , 'show']);
Route::post('/city-store', [App\Http\Controllers\CityApiController::class , 'store']);
Route::delete('/city-delete/{id}' , [App\Http\Controllers\CityApiController::class , 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
