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
// Admin Routes
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>['auth']], function () {
    Route::resource('categories',
        'Admin\CategoriesController',
        ['only'=>['index', 'store', 'destroy']]);

    Route::resource('products',
        'Admin\ProductsController',
        ['only'=>['index', 'store', 'destroy']]);

    Route::post('products/toggle-availability',
        'Admin\ProductsController@toggleAvailability')
        ->name('products.toggle');
});


// Store Routes
Route::get('/', 'StoreController@index')
    ->name('store.index');
Route::get('product/{id}', 'StoreController@show')
    ->name('store.show');

Route::get('category/{id}', ['as' => 'store.category', 'uses'=>'StoreController@category']);

// Search
Route::get('search', 'StoreController@search')->name('store.search');


// Authentication Routes
//Route::post('login', ['as'=>'login', 'uses'=>'Auth\LoginController@login']);
//Route::get('logout', ['as'=>'logout', 'uses'=>'Auth\LoginController@logout']);
//Route::get('login', ['as'=>'loginform', 'uses'=>'Auth\LoginController@showLoginForm']);

Route::get('login', 'Auth\LoginController@showLoginForm')->name('loginform');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


// Registration Routes
Route::get('register', ['as'=>'registerfrom', 'uses'=>'Auth\RegisterController@showRegistrationForm']);
Route::post('register', ['as'=>'register', 'uses'=>'Auth\RegisterController@register']);

