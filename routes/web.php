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
