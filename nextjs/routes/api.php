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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pens', 'App\Http\Controllers\PenController@index');
Route::post('/pens', 'App\Http\Controllers\PenController@store');
Route::get('/pens/{pen:id}', 'App\Http\Controllers\PenController@edit');
Route::patch('/pens/{pen:id}', 'App\Http\Controllers\PenController@update');
Route::delete('/pens/{pen:id}', 'App\Http\Controllers\PenController@delete');

Route::get('/orders', 'App\Http\Controllers\OrderController@index');
Route::post('/orders', 'App\Http\Controllers\OrderController@store');
Route::get('/orders/{order:id}', 'App\Http\Controllers\OrderController@edit');
Route::patch('/orders/{order:id}', 'App\Http\Controllers\OrderController@update');
Route::delete('/orders/{order:id}', 'App\Http\Controllers\OrderController@delete');