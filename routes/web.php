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

    $restaurants = \App\Restaurant::all();
    //$cart = \Cart::getContent();
    return view('index',compact('restaurants'));
});

//// ROUTE JSON AJAX ///////////

Route::post('/json/categorie/article', 'MenuController@jsonCat')->name('cat.article');
Route::post('/json/cart', 'CartController@jsonCart')->name('cart.article');
Route::get('/json/commande/last', 'OrderController@jsonCmd')->name('cmd.article');



//Cart function
Route::get('/cart/{restaurant}','CartController@index')->name('cart.index');
Route::post('/cart/add/{restaurant}','CartController@addItem')->name('cart.add');
Route::get('/cart/add/{article}','CartController@removeItem')->name('cart.remove');
//Cart end

// Checkout
Route::get('/checkout/{restaurant}','OrderController@index')->name('order.index');

Route::post('/checkout/add','OrderController@add')->name('order.add');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/resto/list', 'RestaurantController@index')->name('resto.list');
Route::post('/restaurants', 'RestaurantController@store')->name('resto.store');

Route::get('/admin/resto/pop', 'RestaurantController@populaire')->name('resto.pop');

Route::get('/admin/resto/{restaurant}/access', 'RestaurantController@access')->name('resto.access');
Route::patch('/admin/{restaurant}/one', 'RestaurantController@update')->name('resto.update');
Route::patch('/admin/{restaurant}', 'RestaurantController@update_bis')->name('resto.update_bis');

Route::get('/admin/resto/{restaurant}/access/reservation', 'ReservationController@index')->name('resto.reserv');
Route::post('/admin/{restaurant}', 'ReservationController@update')->name('resto.updateReserv');


Route::get('/admin/resto/{restaurant}/access/openhours', 'RestaurantController@openhours')->name('resto.hours');

Route::get('/admin/resto/{restaurant}/access/menu', 'RestaurantController@menu')->name('resto.menu');

// CRUD Category
Route::get('/admin/resto/{restaurant}/menu/category', 'CategoryController@index')->name('category.index');
Route::post('/admin/category/{restaurant}', 'CategoryController@store')->name('category.store');
Route::get('/admin/category/{category}/edit', 'CategoryController@edit')->name('category.edit');
Route::patch('/admin/category/{category}', 'CategoryController@update')->name('category.update');
Route::delete('/admin/category/{category}', 'CategoryController@destroy')->name('category.destroy');

// CRUD ARTICLE
//Route::get('/admin/resto/{restaurant}/menu/{category}/article', 'ArticleController@index')->name('article.index');
//Route::post('/admin/article/{category}', 'ArticleController@store')->name('article.store');
Route::post('/admin/article', 'ArticleController@store')->name('article.store');


Route::get('/admin/resto/{restaurant}/access/cuisine', 'CuisineController@index')->name('resto.cuisine');
Route::post('/cuisines/{restaurant}', 'CuisineController@store')->name('cuisine.store');

Route::delete('/delete/{restaurant}/{cuisine}', 'CuisineController@delete')->name('cuisine.delete');
Route::post('/cuisine/{restaurant}', 'CuisineController@ajouter')->name('cuisine.ajouter');

// Heure d'ouverture
Route::post('/business/hours/{restaurant}', 'BusinessHoursController@store')->name('business.store');
Route::post('/json/dateheure', 'ReservationController@jsonDate')->name('resto.heure');

/**Les routes de la partie client */

// route menu des categories
Route::get('/restaurant/menu/{restaurant}', 'MenuController@menu')->name('restaurant.menu');

// route menu article
Route::get('/restaurant/menu/{category}/{restaurant}/article','MenuController@menuArticle')->name('restaurant.article');



/**    ROUTE POUR LES RESTAURATEURS    */
Route::get('/restaurant/connexion', 'RestaurateurController@login')->name('restaurateur.login');
Route::post('/restaurant/connexion/login', 'RestaurateurController@connexion')->name('restaurateur.connexion');
Route::get('/restaurant/acceuil', 'RestaurateurController@acceuil')->name('restaurateur.acceuil');
Route::get('/restaurant/send/mail/{client}', 'RestaurateurController@sendMail')->name('restaurateur.sendMail');


Route::post('/add/client', 'RestaurateurController@addClient')->name('restaurateur.addClient');


