<?php

use Illuminate\Http\Request;

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
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('restaurant', 'ApiController@index');
Route::get('/admin/resto/list', 'RestaurantController@index')->name('resto.list');

Route::get('/json/commande', 'OrderController@jsonCmd')->name('cmd.article');
Route::post('/json/commande/confirmation', 'OrderController@cmdConfirm');
Route::post('/checkout/add','OrderController@add')->name('order.add');

Route::get('/json/reservation', 'ReservationController@jsonReserv')->name('reserv.json');
Route::post('/json/Reservation/confirmation','ReservationController@reservConfirm');
Route::post('/admin/reservation/test', 'ReservationController@store')->name('reserv.store');
