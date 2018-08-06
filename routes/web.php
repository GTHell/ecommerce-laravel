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

/*
 * dashboard
 */

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', 'Dashboard\IndexController@index')->name('dashboard');
    Route::get('/products', 'Dashboard\ProductController@index')->name('products');
    Route::get('/carts', 'Dashboard\CartController@index')->name('carts');
    Route::get('/orders', 'Dashboard\OrderController@index')->name('orders');
});
