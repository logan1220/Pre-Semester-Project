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

Route::get('/manage-volunteers', 'HomeController@mv')->name('manageVol');

Route::get('/manage-opportunities', 'HomeController@mo')->name('manageOpp');

Route::resource('volunteer', 'VolunteerController');

Route::get('/about', 'HomeController@us')->name('about');
