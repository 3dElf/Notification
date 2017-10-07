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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/post/store', 'PostController@store');
Route::get('/post/{id}', 'PostController@show')->name('post.show');

Route::post('/comment/store', 'CommentController@store');

Route::post('/notification/get', 'NotificationController@get');
Route::post('/notification/read', 'NotificationController@read');
