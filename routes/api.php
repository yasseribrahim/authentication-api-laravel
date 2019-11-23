<?php

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

Route::prefix('v1')->group(function() {
    Route::post('login', 'AuthenticationController@login');
    Route::post('register', 'AuthenticationController@register');
    Route::group(['middleware' => 'auth:api'], function() {
        Route::post('getUser', 'AuthenticationController@getUser');
    });
});

Route::prefix('v1')->group(function() {
    Route::get('items', 'ItemController@index')->middleware('client');
    Route::get('items/{id}', 'ItemController@show')->middleware('client');
    Route::post('items', 'ItemController@store')->middleware('client');
    Route::put('items/{id}', 'ItemController@update')->middleware('client');
    Route::delete('items/{id}', 'ItemController@delete')->middleware('client');
});

Route::prefix('v1')->group(function() {
    Route::get('orders', 'OrderController@index')->middleware('client');
    Route::get('orders/{id}', 'OrderController@show')->middleware('client');
    Route::post('orders', 'OrderController@store')->middleware('client');
    Route::put('orders/{id}', 'OrderController@update')->middleware('client');
    Route::delete('orders/{id}', 'OrderController@delete')->middleware('client');
});