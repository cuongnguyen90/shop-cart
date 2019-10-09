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


use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'FrontEnd'],function (){

    Route::get('/','HomeController@index')->name('home.index');

    Route::get('/cart','CartController@getCart')->name('get.cart');

    Route::get('/cart/delete','CartController@removeItem')->name('remove.item');

    Route::get('/cart/add','CartController@add')->name('add.cart');
});

