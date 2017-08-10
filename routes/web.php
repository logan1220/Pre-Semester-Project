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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage-volunteers', 'VolunteerController@index')->name('manage_volunteer');

Route::get('/manage-opportunities', 'OpportunityController@index')->name('manage_opportunity');

Route::resource('volunteer', 'VolunteerController');

Route::get('/about', 'HomeController@about_us')->name('about');

Route::resource('opportunity', 'OpportunityController');
