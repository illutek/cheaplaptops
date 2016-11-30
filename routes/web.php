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

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
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

