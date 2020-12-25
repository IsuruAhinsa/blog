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

});


Route::view('posts/show', 'posts.show');
Route::view('posts', 'posts.index');
Route::view('posts/create', 'posts.create');
Route::view('posts/edit', 'posts.edit');
Route::view('categories', 'categories.index');
Route::view('categories/create', 'categories.create');
Route::view('categories/edit', 'categories.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
