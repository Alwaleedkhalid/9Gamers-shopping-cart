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

Route::get('/', function () {
     return redirect()->route('store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/store', 'HomeController@store')->name('store');

//Product
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/addTocrat/{product}', 'ProductController@addTocrat')->name('cart.add');
Route::get('/shopping-cart', 'ProductController@ShowCart')->name('cart.show');
Route::get('/chekout/{amount}', 'ProductController@chekout')->name('cart.chekout')->middleware('auth');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.remove');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');

Route::POST('/charge', 'ProductController@charge')->name('cart.charge');

//order 
Route::get('/orders', 'OrderController@index')->name('order.index')->middleware('auth');
