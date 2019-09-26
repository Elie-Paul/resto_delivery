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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/resto/list', 'RestaurantController@index')->name('resto.list');
Route::get('/resto/pop', 'RestaurantController@populaire')->name('resto.pop');
Route::get('/resto/access', 'RestaurantController@access')->name('resto.access');

Route::get('/resto/access/reservation', 'ReservationController@index')->name('resto.reserv');

