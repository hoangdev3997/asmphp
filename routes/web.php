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

Route::get('/shop/{category_id}','CategoryController@show');

Route::get('/cart',function(){
    return view('page.cart');
});

Route::get('/shop/product/{{product_id}}','ProductController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
