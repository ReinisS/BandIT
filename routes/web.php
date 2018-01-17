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
Route::get('/', 'EventController@index');
Route::get('home', 'HomeController@index');
Route::get('admin', 'AdminController');
Route::get('band', 'BandController@index');
Route::get('band/create', 'BandController@create');
Route::post('band/create', 'BandController@store');
Route::get('band/{id}', 'BandController@show')->where('id', '[0-9]+');
Route::get('band/edit/{id}', 'BandController@edit')->where('id', '[0-9]+');
Route::get('event/{id}', 'EventController@show')->where('id', '[0-9]+');
Route::post('event/{id}', 'EventController@comment')->where('id', '[0-9]+');
Route::get('public_events', 'EventController@index');
Route::get('event/create', 'EventController@create');
Route::post('event/create', 'EventController@store');
Route::get('band/{band_id}/event/{event_id}/attendance', 'BandController@attendance')->where('band_id', '[0-9]+')->where('event_id', '[0-9]+');
Route::post('band/{band_id}/event/{event_id}/attendance', 'BandController@updateattendance')->where('band_id', '[0-9]+')->where('event_id', '[0-9]+');
