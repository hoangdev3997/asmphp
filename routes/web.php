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

Route::get('/', 'HomeController@index');

Route::get('/contact',function(){
    return view('page.contact');
});

Route::get('/about',function(){
    return view('page.about');
});

Route::get('/shop','CategoryController@index');
Route::get('/shop/{category_id}/{category_name}','CategoryController@show');

Route::get('/cart',function(){
    return view('page.cart');
});

Route::get('/product/{product_id}/{product_name}','ProductController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::get('/cart-remove/{id}', 'CartController@remove')->name('cart.remove');
Route::post('/cart-update', 'CartController@update')->name('cart.update');