<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin/home','adminhomeController@homepage');
Route::resource('/admin/category','CategoryController');
Route::resource('/admin/book','bookController');
Route::resource('/admin/issuebook','issuebookController');
Route::resource('/admin/panel','adminController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login', 'Admin\Auth\Logincontroller@showLoginForm');
Route::post('/admin/logout', 'Admin\Auth\Logincontroller@logout')->name('admin.logout');
Route::post('/admin/login', 'Admin\Auth\Logincontroller@login')->name('admin.login');
Route::get('/admin/student','studentcontroller@show')->name('std.show');
Route::get('/home/book','Homecontroller@book')->name('user.book');
Route::get('/home/profile','Homecontroller@profile')->name('user.profile');

