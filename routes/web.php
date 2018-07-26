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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','poagesController@index');
Route::get('/services','poagesController@services');
Route::get('/about','poagesController@about');
Auth::routes();
// Route::resource('posts/show','PostsController@show');
Route::resource('posts','PostsController');
Route::get('/home', 'HomeController@index');
Route::get('/update','ProfileController@getProfile')->name('profile.Update');
Route::post('/update','ProfileController@postProfile')->name('profile.Update');