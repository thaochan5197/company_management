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
    Route::get('/category/list', 'CategoryController@showList')->name('category.list');
    Route::get('/category/add', 'CategoryController@showForm')->name('category.add.show');
    Route::get('/category/edit', 'CategoryController@showForm')->name('category.edit.show');
    Route::post('/category/add', 'CategoryController@add')->name('category.add.action');
    Route::post('/category/edit', 'CategoryController@add')->name('category.edit.action');
    Route::get('/category/check-type', 'CategoryController@checkType')->name('category.checkType');
});