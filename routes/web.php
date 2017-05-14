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

Route::get('/', 'PagesController@getIndex');
Route::resource('face', 'FaceController');
Route::resource('contact','ContactsController');

Route::get('login',['as' =>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('login','Auth\LoginController@Login');
Route::get('logout', ['as' =>'logout','uses'=>'Auth\LoginController@logout']);
Route::get('register','Auth\RegisterController@showRegistrationForm');
Route::post('register','Auth\RegisterController@Register');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
