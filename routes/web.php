<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , 'App\Http\Controllers\ProductController@index');
Route::get('/city/{slug}' , 'App\Http\Controllers\CityController@show')->name('city.show');
Route::get('/carts','App\Http\Controllers\CartController@index');
Route::post('/add-cart' , 'App\Http\Controllers\CartController@store')->name('add-cart');
Route::delete('/cart-destroy/{id}' , 'App\Http\Controllers\CartController@destroy')->name('cart.remove');


