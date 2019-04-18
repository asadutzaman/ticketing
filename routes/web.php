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
    Route::resource('/ticket', 'TicketController');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::resource('/ticketlead', 'TicketleadController');
    Route::resource('/user', 'UserController');
});
Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
<<<<<<< HEAD
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
<<<<<<< HEAD

//Route::get('/customerview', 'TicketController@customerview');
=======
//Route::get('/customerview', 'TicketController@customerview');
>>>>>>> d86f9493e69aba5c1c0a8d7fbeae8f239a8349af
=======
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
>>>>>>> parvez
