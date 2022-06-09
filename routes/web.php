<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function() {
        // Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('users', 'UserController');
        
        Route::resource('products', 'ProductController');

        Route::resource('orders', 'OrderController');
        
        Route::delete('/products/{product}/force', 'ProductController@forceDestroy')->name('products.destroy.force');
    });
    
    Route::namespace('Auth')->group(function(){
       Route::get('logout', 'loginController@logout');
    });

    Route::fallback(function(){
        return view('guest.home');
    });

    Route::get('checkout','CheckoutController@checkout');
    Route::post('checkout','CheckoutController@afterpayment')->name('checkout.credit-card');