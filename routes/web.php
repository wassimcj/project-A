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

Route::get('/','PagesController@home' );
Route::get('/home','PagesController@home' );
Route::get('/flowers','PagesController@flowers' );
Route::get('/perfumes','PagesController@perfumes' );
Route::get('/chocolats','PagesController@chocolats' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('flowers','FlowersController');
Route::resource('perfumes','PerfumesController');
Route::resource('chocolats','PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
