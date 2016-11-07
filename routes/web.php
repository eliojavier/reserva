<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('users', 'UserController');
Route::resource('cars', 'CarController');
Route::get('car_rentals/user/{id}', 'CarRentalController@showByUser');
Route::resource('car_rentals', 'CarRentalController');
Route::resource('roles', 'RoleController');
Route::resource('offices', 'OfficeController');

Route::get('/home', 'HomeController@index');
