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
Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::get('/agency/index', 'AgencyController@index')->name('agency.index')->middleware(['locale']);
Route::get('/agency/create', 'AgencyController@create')->name('agency.create')->middleware(['locale']);
Route::post('/agency/store', 'AgencyController@store')->name('agency.store')->middleware(['locale']);
Route::get('/agency/detail/{id}', 'AgencyController@show')->name('agency.show')->middleware(['locale']);
Route::get('/agency/edit/{id}', 'AgencyController@edit')->name('agency.edit')->middleware(['locale']);
Route::put('/agency/update/{id}', 'AgencyController@update')->name('agency.update')->middleware(['locale']);
Route::get('/agency/destroy/{id}', 'AgencyController@destroy')->name('agency.destroy')->middleware(['locale']);

Route::get('/position/index', 'PositionController@index')->name('position.index')->middleware(['locale']);
Route::get('/position/create', 'PositionController@create')->name('position.create')->middleware(['locale']);
Route::post('/position/store', 'PositionController@store')->name('position.store')->middleware(['locale']);
Route::get('/position/detail/{id}', 'PositionController@show')->name('position.show')->middleware(['locale']);
Route::get('/position/edit/{id}', 'PositionController@edit')->name('position.edit')->middleware(['locale']);
Route::put('/position/update/{id}', 'PositionController@update')->name('position.update')->middleware(['locale']);
Route::get('/position/destroy/{id}', 'PositionController@destroy')->name('position.destroy')->middleware(['locale']);

Route::get('/employee/index', 'EmployeesController@index')->name('employee.index')->middleware(['locale']);
Route::get('/employee/create', 'EmployeesController@create')->name('employee.create')->middleware(['locale']);
Route::post('/employee/store', 'EmployeesController@store')->name('employee.store')->middleware(['locale']);
Route::get('/employee/detail/{id}', 'EmployeesController@show')->name('employee.show')->middleware(['locale']);
Route::get('/employee/edit/{id}', 'EmployeesController@edit')->name('employee.edit')->middleware(['locale']);
Route::put('/employee/update/{id}', 'EmployeesController@update')->name('employee.update')->middleware(['locale']);
Route::get('/employee/destroy/{id}', 'EmployeesController@destroy')->name('employee.destroy')->middleware(['locale']);

Route::get('/position/add', 'PositionController@getPositionsAjax')->name('add');
Route::get('/employee/position', 'EmployeesController@getManagerByPosition')->name('employee.position');
Route::get('/employee/agency', 'EmployeesController@getManagerByAgency')->name('employee.agency');
Route::get('/employee/show/{id}', 'EmployeesController@show')->name('employee.show');

Route::prefix('admin')->group(function() {
    Auth::routes();
    Route::get('/dashboard', 'DashboardController@index')->name('home');
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
    Route::get('/page/dropOrPublish/{id}/{status}', 'PostController@dropOrPublish')->name('page.dropOrPublish')->middleware(['locale', 'auth']);
    Route::get('/post/index', 'PostController@index')->name('post.index')->middleware(['locale', 'auth']);
    Route::get('/post/create', 'PostController@create')->name('post.create')->middleware(['locale', 'auth']);
    Route::post('/post/store', 'PostController@store')->name('post.store')->middleware(['locale', 'auth']);
    Route::get('/post/detail/{id}', 'PostController@show')->name('post.show')->middleware(['locale', 'auth']);
    Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit')->middleware(['locale', 'auth']);
    Route::put('/post/update/{id}', 'PostController@update')->name('post.update')->middleware(['locale', 'auth']);
    Route::get('/post/destroy/{id}', 'PostController@destroy')->name('post.destroy')->middleware(['locale', 'auth']);
    Route::get('/post/dropOrPublish/{id}/{status}', 'PostController@dropOrPublish')->name('post.dropOrPublish')->middleware(['locale', 'auth']);
});
Route::get('get-province', 'CrawlerProvince@getProvince')->name('province.crawler');