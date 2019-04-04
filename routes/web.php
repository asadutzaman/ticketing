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
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/customerview', 'TicketController@customerview')->name('customerview');
    Route::resource('/ticket', 'TicketController');
    Route::resource('/fetch', 'FetchController');
});

Route::get('/logout', 'Auth\LoginController@logout');
