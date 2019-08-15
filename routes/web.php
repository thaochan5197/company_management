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
    Route::get('/project/edit', 'ProjectController@showForm')->name('project.edit.show')->middleware(['locale', 'auth']);
    Route::post('/project/add', 'ProjectController@add')->name('project.add.action')->middleware(['locale', 'auth']);
    Route::post('/project/edit', 'ProjectController@add')->name('project.edit.action')->middleware(['locale', 'auth']);
    Route::get('/project/list', 'ProjectController@showList')->name('project.list')->middleware(['locale', 'auth']);
    Route::get('/province/get', 'ProvinceController@getProvince')->name('province.get')->middleware(['locale', 'auth']);
    Route::get('/page/index', 'PageController@index')->name('page.index')->middleware(['locale', 'auth']);
    Route::get('/page/create', 'PageController@create')->name('page.create')->middleware(['locale', 'auth']);
    Route::post('/page/store', 'PageController@store')->name('page.store')->middleware(['locale', 'auth']);
    Route::get('/page/detail/{id}', 'PageController@show')->name('page.show')->middleware(['locale', 'auth']);
    Route::get('/page/edit/{id}', 'PageController@edit')->name('page.edit')->middleware(['locale', 'auth']);
    Route::put('/page/update/{id}', 'PageController@update')->name('page.update')->middleware(['locale', 'auth']);
    Route::get('/page/destroy/{id}', 'PageController@destroy')->name('page.destroy')->middleware(['locale', 'auth']);
    // Route::resource('/page', 'PageController')->middleware(['locale', 'auth']);
});
Route::get('get-province', 'CrawlerProvince@getProvince')->name('province.crawler');