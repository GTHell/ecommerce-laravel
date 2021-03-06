<?php

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

Route::get('/', 'Home\IndexController@index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/products/{id}', 'ProductController@getProduct')->name('product.show');
Route::get('/carts', 'CartController@index')->name('carts');

/*
 * dashboard
 */

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', 'Dashboard\IndexController@index')->name('dashboard');
    // Product
    Route::resource('/products', 'Dashboard\ProductController', ['as' => 'dashboard']);
    // Cart
    Route::get('/carts', 'Dashboard\CartController@index')->name('dashboard.carts');
    Route::get('/orders', 'Dashboard\OrderController@index')->name('dashboard.orders');
});
