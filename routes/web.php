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

Route::resource('companies','CompanyController');
Route::resource('posts','PostController');
Route::resource('banks','BankController');
Route::resource('employees','EmployeeController');
Route::resource('employee_post','EmployeePostController');
Route::resource('abouts','AboutController');
Route::resource('contacts','ContactController');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
