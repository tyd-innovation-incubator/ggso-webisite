<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/24/2019
 * Time: 12:32 PM
 */


// ADMIN PANEL ROUTES


//ABOUT US ROUTES
Route::get('/admin/about-us','admin\AboutController@show')->name('show_aboutus');
Route::get('/admin/about-us/edit','admin\AboutController@edit');
Route::post('/admin/about-us/save/{id}','admin\AboutController@save');


//CONTACTS ROUTES
Route::get('/admin/contacts','admin\ContactsController@show')->name('show_contacts');
Route::get('/admin/contacts/edit','admin\ContactsController@edit');
Route::post('/admin/contacts/save/{id}','admin\ContactsController@save');

//SERVICES  ROUTES
Route::get('/admin/services','admin\ServicesController@index');
Route::get('/admin/services/create', 'admin\ServicesController@create');
Route::get('/admin/services/{services}','admin\ServicesController@show');
Route::post('/admin/services/store','admin\ServicesController@store');
Route::get('/admin/services/{id}/edit','admin\ServicesController@edit');
Route::post('/admin/services/{services}/save','admin\ServicesController@save');
Route::get('/admin/services/{services}/destroy','admin\ServicesController@destroy');

//SERVICES  ROUTES
Route::get('/admin/teams','admin\TeamController@index');
Route::get('/admin/teams/create', 'admin\TeamController@create');
Route::get('/admin/teams/{team}','admin\TeamController@show');
Route::post('/admin/teams/store','admin\TeamController@store');
Route::get('/admin/teams/{id}/edit','admin\TeamController@edit');
Route::post('/admin/teams/{team}/save','admin\TeamController@save');
Route::get('/admin/teams/{team}/destroy','admin\TeamController@destroy');


//PARTNERS  ROUTES
Route::get('/admin/partners','admin\PartnersController@index');
Route::get('/admin/partners/create', 'admin\PartnersController@create');
Route::get('/admin/partners/{services}','admin\PartnersController@show');
Route::post('/admin/partners/store','admin\PartnersController@store');
Route::get('/admin/partners/{id}/edit','admin\PartnersController@edit');
Route::post('/admin/partners/{partners}/save','admin\PartnersController@save');
Route::get('/admin/partners/{partners}/destroy','admin\PartnersController@destroy');



//TESTIMONIES  ROUTES
Route::get('/admin/testimonies','admin\TestimonyController@index');
Route::get('/admin/testimonies/create', 'admin\TestimonyController@create');
Route::get('/admin/testimonies/{testimonies}','admin\TestimonyController@show');
Route::post('/admin/testimonies/store','admin\TestimonyController@store');
Route::get('/admin/testimonies/{id}/edit','admin\TestimonyController@edit');
Route::post('/admin/testimonies/{testimonies}/save','admin\TestimonyController@save');
Route::get('/admin/testimonies/{testimonies}/destroy','admin\TestimonyController@destroy');

//Home Content
Route::get('/admin/home/contents','admin\HomeController@index');
Route::get('/admin/home/contents/{content}/edit','admin\HomeController@edit');
Route::post('/admin/home/contents/{content}/save','admin\HomeController@save');


//HOME IMAGES SLIDE
Route::get('/admin/slides','admin\SlideController@index');
Route::get('/admin/slides/create','admin\SlideController@create');
Route::post('/admin/slides/store','admin\SlideController@store');
Route::get('/admin/slides/{image}/edit','admin\SlideController@edit');
Route::post('/admin/slides/{image}/save','admin\SlideController@save');
Route::get('/admin/slides/{image}','admin\SlideController@show');
Route::get('/admin/slides/{image}/delete','admin\SlideController@destroy');

//NEWS ROUTES
Route::get('/admin/news','admin\NewsController@index');
Route::get('/admin/news/create', 'admin\NewsController@create');
Route::get('/admin/news/{new}','admin\NewsController@show');
Route::post('/admin/news/store','admin\NewsController@store');
Route::get('/admin/news/{id}/edit','admin\NewsController@edit');
Route::post('/admin/news/{news}/save','admin\NewsController@save');
Route::get('/admin/news/{news}/destroy','admin\NewsController@destroy');



// TAGS ROUTES
Route::get('/admin/tags','admin\TagsController@index');
Route::get('/admin/tags/create', 'admin\TagsController@create');
Route::post('/admin/tags/store','admin\TagsController@store');
Route::get('/admin/tags/{id}/edit','admin\TagsController@edit');
Route::post('/admin/tags/{tag}/save','admin\TagsController@save');
Route::get('/admin/tags/{tag}/destroy','admin\TagsController@destroy');

//FAQS ROUTES
Route::get('/admin/faqs','admin\FaqsController@index');
Route::get('/admin/faqs/create', 'admin\FaqsController@create');
Route::get('/admin/faqs/{faq}','admin\FaqsController@show');
Route::post('/admin/faqs/store','admin\FaqsController@store');
Route::get('/admin/faqs/{id}/edit','admin\FaqsController@edit');
Route::post('/admin/faqs/{faq}/save','admin\FaqsController@save');
Route::get('/admin/faqs/{faq}/destroy','admin\FaqsController@destroy');

//USERS ROUTES
Route::get('/dashboard', 'admin\UsersController@dashboard');
Route::get('/admin/users','admin\UsersController@index')->name('admin_list');
Route::get('/admin/users/add','admin\UsersController@add')->name('add_admin');
Route::post('/admin/users/store','admin\UsersController@store');
Route::get('/admin/users/{user}','admin\UsersController@edit');
Route::post('/admin/users/{user}/save','admin\UsersController@save');
Route::get('/admin/users/{user}/destroy','admin\UsersController@destroy');
Route::get('/logout','admin\UsersController@logout');