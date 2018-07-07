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

Route::get('/', 'SiteController@index')->name('index');

Route::get('/site/about', 'SiteController@about');
Route::get('/site/messageBoard', 'SiteController@messageBoard');
//Route::resource('/site', 'SiteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/article', 'ArticleController');
Route::resource('/category', 'CategoryController');
Route::resource('/user', 'UserController');