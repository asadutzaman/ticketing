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

Auth::routes();

Route::group(['middleware' => ["auth"]],function(){
    Route::get('/', 'TicketController@index')->name('home');
    Route::get('/customerview', 'TicketController@customerview')->name('customerview');
    Route::resource('/ticket', 'TicketController');
    Route::get('/logout', 'Auth\LoginController@logout');
});

Route::resource('/fetch', 'FetchController');