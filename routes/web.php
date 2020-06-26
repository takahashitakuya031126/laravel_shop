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

Route::get('/', 'ShopController@index');
Route::get('/mycart', 'ShopController@myCart')->middleware('auth');
Route::post('/mycart', 'ShopController@addMycart')->middleware('auth');
Route::post('/cartdelete','ShopController@deleteCart')->middleware('auth');
Route::post('/checkout', 'ShopController@checkout')->middleware('auth');

Auth::routes();