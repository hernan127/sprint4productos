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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index');

Route::get('/backoffice', 'BackofficeController@index');

Route::get('/products/create', 'ProductController@create')->middleware("admin");

Route::post('/products/create', 'ProductController@store');

Route::get('/products/{id}', 'ProductController@show');

Route::get('/products/{id}/edit', 'ProductController@edit');

Route::patch('/products/{id}/edit', 'ProductController@update');

Route::group(['prefix' => 'cart'], function() {
    Route::get('/', 'CartController@index');
    Route::get('/add/{product_id}', 'CartController@add');
    Route::get('/remove/{product_id}', 'CartController@remove');
    Route::get('/checkout', 'CartController@checkout');
    Route::get('/flush', 'CartController@flush');
});
