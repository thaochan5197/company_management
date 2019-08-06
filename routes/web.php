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

Route::prefix('admin')->group(function() {
    Auth::routes();
    Route::get('/dashboard', 'DashboardController@index')->name('home')->middleware(['locale', 'auth']);
    Route::get('/product', 'ProductController@index')->name('product.index')->middleware(['locale', 'auth']);
    Route::get('/post/add', 'RealtyPostController@add')->name('realty_post.add')->middleware(['locale', 'auth']);
    Route::get('/category/list', 'CategoryController@showList')->name('category.list')->middleware(['locale', 'auth']);
    Route::get('/category/add', 'CategoryController@showForm')->name('category.add.show')->middleware(['locale', 'auth']);
    Route::get('/category/edit', 'CategoryController@showForm')->name('category.edit.show')->middleware(['locale', 'auth']);
    Route::post('/category/add', 'CategoryController@add')->name('category.add.action')->middleware(['locale', 'auth']);
    Route::post('/category/edit', 'CategoryController@add')->name('category.edit.action')->middleware(['locale', 'auth']);
    Route::get('/category/check-type', 'CategoryController@checkType')->name('category.checkType')->middleware(['locale', 'auth']);
    Route::get('/project/add', 'ProjectController@showForm')->name('project.add.show')->middleware(['locale', 'auth']);
    Route::get('/province/get', 'ProvinceController@getProvince')->name('province.get')->middleware(['locale', 'auth']);
});
Route::get('get-province', 'CrawlerProvince@getProvince')->name('province.crawler');