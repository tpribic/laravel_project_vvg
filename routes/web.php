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
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');

Route::get('/jobtypes/delete/{id}', 'JobtypeController@destroy');
Route::get('/jobtypes', 'JobtypeController@index');
Route::get('/jobtypes/new', 'JobtypeController@create');
Route::post('/jobtypes', 'JobtypeController@store');

Route::get('/offices/delete/{id}', 'OfficeController@destroy');
Route::get('/offices', 'OfficeController@index');
Route::get('/offices/new', 'OfficeController@create');
Route::post('/offices', 'OfficeController@store');

Route::get('/bonuses/delete/{id}', 'BonusController@destroy');
Route::get('/bonuses', 'BonusController@index');
Route::get('/bonuses/new', 'BonusController@create');
Route::post('/bonuses', 'BonusController@store');

Route::get('/jobs/delete/{id}', 'JobController@destroy');
Route::get('/jobs', 'JobController@index');
Route::get('/jobs/new', 'JobController@create');
Route::post('/jobs', 'JobController@store');

Route::get('/employees/delete/{id}', 'EmployeeController@destroy');
Route::get('/employees', 'EmployeeController@index');
Route::get('/employees/new', 'EmployeeController@create');
Route::post('/employees', 'EmployeeController@store');

