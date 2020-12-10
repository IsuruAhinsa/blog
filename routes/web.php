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

Route::view('profile', 'settings.profile');
Route::view('posts/show', 'posts.show');
Route::view('posts', 'posts.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
