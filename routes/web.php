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
Route::post('/restaurants', 'RestaurantController@store')->name('resto.store');

Route::get('/admin/resto/pop', 'RestaurantController@populaire')->name('resto.pop');

Route::get('/admin/resto/{restaurant}/access', 'RestaurantController@access')->name('resto.access');
Route::patch('/admin/{restaurant}', 'RestaurantController@update')->name('resto.update');

Route::get('/admin/resto/{restaurant}/access/reservation', 'ReservationController@index')->name('resto.reserv');

Route::get('/admin/resto/access/openhours', 'RestaurantController@openhours')->name('resto.hours');

Route::get('/admin/resto/{restaurant}/access/menu', 'RestaurantController@menu')->name('resto.menu');

// CRUD Category
Route::get('/admin/resto/{restaurant}/menu/category', 'CategoryController@index')->name('category.index');
Route::post('/admin/category', 'CategoryController@store')->name('category.store');
Route::get('/admin/category/{category}/edit', 'CategoryController@edit')->name('category.edit');
Route::patch('/admin/category/{category}', 'CategoryController@update')->name('category.update');
Route::delete('/admin/category/{category}', 'CategoryController@destroy')->name('category.destroy');


Route::get('/admin/resto/{restaurant}/access/cuisine', 'CuisineController@index')->name('resto.cuisine');
Route::post('/cuisines/{restaurant}', 'CuisineController@store')->name('cuisine.store');

Route::delete('/delete/{restaurant}/{cuisine}', 'CuisineController@delete')->name('cuisine.delete');
Route::post('/cuisine/{restaurant}/{id}', 'CuisineController@ajouter')->name('cuisine.ajouter');

