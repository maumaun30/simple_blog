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

Auth::routes();

Route::get('/', 'HomeController@welcome')->name('home');

Route::resource('posts', 'PostController');

Route::get('profile/{username}', 'UserController@profile')->name('profile');

Route::get('/confirm', 'UserController@confirmView');
Route::get('send/confirm/email/{id}', 'UserController@sendConfirmEmail')->name('send/confirm/email');
Route::get('confirm/email/{id}', 'UserController@confirmEmail');