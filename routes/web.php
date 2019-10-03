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

Route::get('/admin/resto/list', 'RestaurantController@index')->name('resto.list');
Route::get('/admin/resto/pop', 'RestaurantController@populaire')->name('resto.pop');
Route::get('/admin/resto/access', 'RestaurantController@access')->name('resto.access');

Route::get('/admin/resto/access/reservation', 'ReservationController@index')->name('resto.reserv');
Route::get('/admin/resto/access/openhours', 'RestaurantController@openhours')->name('resto.hours');
Route::get('/admin/resto/access/menu', 'RestaurantController@menu')->name('resto.menu');

Route::get('/admin/resto/access/cuisine', 'CuisineController@index')->name('resto.cuisine');

