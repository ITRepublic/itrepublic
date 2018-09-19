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

Route::get('/', 'HomeController@getHome')->name('home');
Route::get('/about-us', 'AboutController@getAbout')->name('about-us');
Route::get('/job', 'JobController@getJob')->name('job');
Route::get('/job/detail', 'JobController@getJobDetail')->name('jobDetail');
Route::get('/job/search', 'JobController@getJobSearch')->name('jobSearch');
Route::get('/blog', 'BlogController@getBlog')->name('blog');
Route::get('/blog/detail', 'BlogController@getBlogDetail')->name('blogDetail');
Route::get('/contact', 'ContactController@getContact')->name('contact');