<?php

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

Route::namespace('Api')->group(function () {
    Route::get('prefectures', 'PrefectureController@index');
    Route::get('todos', 'TodoController@index');
    Route::post('todos', 'TodoController@store');
    Route::delete('todos', 'TodoController@destroy');
});



