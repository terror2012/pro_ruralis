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

Route::get('/', 'IndexController@index');
//Route::get('/login', 'AuthenticationController@loginIndex');
//Route::get('/register', 'AuthenticationController@registerIndex');
//Route::post('/login', 'AuthenticationController@login');
//Route::post('/register', 'AuthenticationController@register');

Route::get('/init', 'AuthenticationController@init_stuff');

Route::get('/about', 'AboutController@index');

Route::get('/news', 'NewsController@index');

Route::get('/post={id}', 'NewsController@postIndex');

Route::get('/api/news_pages', 'NewsController@api_max_pages');

Route::post('/api/news_posts/', 'NewsController@get_pages');

Route::get('/gallery', 'GalleryController@index');

Route::get('/donations', 'DonationController@index');

Route::post('/gallery/api_images', 'GalleryController@api_get_images');