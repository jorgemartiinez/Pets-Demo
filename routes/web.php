<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/ads/show', 'AdsController@showForUser');
Route::get('/ads/edit/{id}', 'AdsController@edit');
Route::get('/ads/create', 'AdsController@create');
Route::post('/ads/store', 'AdsController@store');
Route::get('/ads/{id}', 'AdsController@show');
Route::get('/ads', 'AdsController@index');

Route::put('/profile/update', 'ProfileController@update');
Route::get('/profile', 'ProfileController@show');

Route::get('/admin', 'AdminController@index');
