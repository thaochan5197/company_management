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
    return redirect()->route('home');
});


Auth::routes();

Route::middleware(['locale', 'auth'])->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('home');
    Route::get('/product', 'ProductController@index')->name('product.index');
    Route::get('/post/add', 'RealtyPostController@add')->name('realty_post.add');
    Route::get('/category/add', 'CategoryController@add')->name('category.add');
});