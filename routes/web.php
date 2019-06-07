<?php

require 'adminroutes.php';
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

Route::get('/','Homecontroller@index');

Route::get('/home','Homecontroller@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::Get('/news', 'NewsController@index')->name('news');

Route::get('/news/{slug}','NewsController@show')->name('news.show');

Route::post('/search', 'NewsController@search')->name('search');

Route::get('/news/tags/{id}','NewsController@withTag');

Route::get('/team','TeamController@index')->name('team');

Route::get('/contacts','ContactController@index')->name('contacts');

Route::post('/send-message','ContactController@sendMail');

Route::get('/testimonials','TestimonyController@index')->name('testimonials');

Route::get('/services','ServiceController@index')->name('services');


Auth::routes();

