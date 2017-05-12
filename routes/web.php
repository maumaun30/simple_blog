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
Route::patch('name/update/{id}', 'UserController@nameUpdate')->name('name.update');
Route::patch('title/update/{id}', 'UserController@titleUpdate')->name('title.update');
Route::patch('description/update/{id}', 'UserController@descriptionUpdate')->name('description.update');

Route::get('/confirm', 'UserController@confirmView');
Route::get('send/confirm/email/{id}', 'UserController@sendConfirmEmail')->name('send/confirm/email');
Route::get('confirm/email/{id}', 'UserController@confirmEmail');