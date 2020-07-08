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

Route::get('/ads/show', 'AdsController@showForUser')->middleware('auth');
Route::get('/ads/edit/{id}', 'AdsController@edit')->middleware('auth');
Route::delete('/ads/destroy/{id}', 'AdsController@destroy')->middleware('auth');
Route::get('/ads/create', 'AdsController@create')->middleware('auth');
Route::post('/ads/store', 'AdsController@store')->middleware('auth');
Route::get('/ads/{id}', 'AdsController@show');
Route::get('/ads', 'AdsController@index');

Route::put('/profile/update', 'ProfileController@update')->middleware('auth');
Route::get('/profile', 'ProfileController@show')->middleware('auth');

Route::get('/admin', 'AdminController@index')->middleware('auth', 'role');;
Route::post('/admin/requests/validate/{id}', 'AdminController@validateRequest')->middleware('auth', 'role');;
Route::get('/admin/requests', 'AdminController@requests')->middleware('auth', 'role');;
