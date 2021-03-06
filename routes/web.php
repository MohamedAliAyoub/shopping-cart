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
    return redirect()->route('store');
});

Auth::routes();
//brand route
	Route::get('/brand/{brand}', 'BrandController@index')->name('brand');
// end brand route 

//brand route
	Route::get('/category/{category}', 'CategoryController@index')->name('category');
// end brand route 


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/store', 'HomeController@store')->name('store');
Route::get('/products', 'ProductController@index')->name('product.index');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.remove');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');
Route::get('/AddToCart/{product}', 'ProductController@AddToCart')->name('cart.add');
Route::get('/shopping-cart', 'ProductController@showCart')->name('cart.show');
Route::get('/checkout/{amount}', 'ProductController@checkout')->name('cart.checkout')->middleware('auth');
Route::post('/charge', 'ProductController@charge')->name('cart.charge');
Route::get('/order', 'OrderController@index')->name('order.index');

// dashboard routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
// end dashboard routes

