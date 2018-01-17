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

//Route::get('/', 'ConferenceController@index');
//Route::resource('conference', 'ConferenceController', ['except' => ['edit', 'update', 'destroy']]);

Auth::routes();
Route::get('/', 'EventController@index');
Route::get('home', 'HomeController@index');
Route::get('event/{id}', 'EventController@show')->where('id', '[0-9]+');
Route::get('admin', 'AdminController');

/*Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'AdminController');
Route::resource('country', 'CountryController', ['only' => ['create', 'store']]);
Route::resource('city', 'CityController', ['only' => ['create', 'store']]);
Route::resource('discount', 'DiscountController', ['only' => ['create', 'store']]);
Route::get('countries/conferences', 'ConferenceController@indexByCountry');
Route::get('conferences/search','ConferenceController@getSearch');
Route::post('conferences/search','ConferenceController@postSearch');

Route::get('registration','RegistrationController@index');
Route::get('registration/{id}','RegistrationController@getRegistration')->where('id', '[0-9]+');
Route::post('registration', 'RegistrationController@store');
Route::get('registration/{conf_id}/{registration_id}','RegistrationController@registrationInfo')->where('conf_id', '[0-9]+')->where('registration_id', '[0-9]+');
*/
