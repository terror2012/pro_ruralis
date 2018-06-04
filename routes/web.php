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

Route::get('/about', 'AboutController@index');

Route::get('/news', 'NewsController@index');

Route::get('/post={id}', 'NewsController@postIndex');

Route::get('/api/news_pages', 'NewsController@api_max_pages');

Route::post('/api/news_posts/', 'NewsController@get_pages');

Route::get('/gallery', 'GalleryController@index');

Route::get('/donations', 'DonationController@index');

Route::post('/gallery/api_images', 'GalleryController@api_get_images');

Route::get('/events', 'EventsController@index');

Route::get('/sponsors', 'SponsorsController@index');

Route::post('/contact', 'IndexController@send_contact_message');

Route::get('/logout', 'AuthenticationController@logout');

Route::middleware(['admin_priv'])->group(function()
{
   Route::get('/adminPanel', 'AdminController@index');
});
Route::middleware(['user_priv'])->group(function()
{
   Route::get('/dashboard', 'UserPanelController@index');
});
Route::middleware(['sponsor_priv'])->group(function()
{
   Route::get('/sponsorPanel', 'SponsorPanelController@index');
});
Route::middleware(['special_path'])->group(function()
{
    Route::get('/login', 'AuthenticationController@loginIndex');
    Route::get('/register', 'AuthenticationController@registerIndex');
    Route::get('/register/student', 'AuthenticationController@studentIndex');
    Route::get('/register/sponsor', 'AuthenticationController@sponsorIndex');
    Route::post('/login', 'AuthenticationController@login');
    Route::post('/register/student', 'AuthenticationController@student');
    Route::post('/register/sponsor', 'AuthenticationController@sponsor');
});
