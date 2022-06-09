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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function(){
    Route::resource('users', 'UserController')->only([
        'index',
        'show'
    ])
    ->parameters([
        'users' => 'users:slug',
        'users' => 'users:user_id'
    ]);
     Route::get('/menu-restaurant/{user}', 'UserController@showMenu');

    Route::resource('/orders', 'OrderController');
    

    // Route::get('/categories', 'CategoryController@index');
    // Route::get('/categories/{category}/posts', 'CategoryController@archive');
    Route::resource('categories', 'CategoryController')->only([
        'index',
        'show'
    ]);
});

