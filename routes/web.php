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

Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('profile', 'UserController@showProfile')->name('profile.show');
    Route::post('profile', 'UserController@updateProfile')->name('profile.update');
    Route::post('password', 'UserController@updatePassword')->name('update.password');
    Route::resource('categories', 'CategoryController');
    Route::get('categories/restore/{id}', 'CategoryController@restore')->name('categories.restore');
    Route::get('categories/fdelete/{id}', 'CategoryController@fdelete')->name('categories.fdelete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
