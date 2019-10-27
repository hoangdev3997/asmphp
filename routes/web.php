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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact',function(){
    return view('page.contact');
});

Route::get('/about',function(){
    return view('page.about');
});

Route::get('/search','SearchController@index')->name('search');
Route::get('/shop','CategoryController@index')->name('shop');
Route::get('/product/{product_id}/{product_name}','ProductController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout/view', 'CartController@checkout')->name('cart.checkout');
Route::post('/cart-checkout', 'CartController@cartsubmit')->name('cart.submit');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::get('/cart-remove', 'CartController@remove')->name('cart.remove');
Route::post('/cart-update', 'CartController@update')->name('cart.update');

Auth::routes();
