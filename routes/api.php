<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/industries', 'profile_controller@getIndustry')->name('industries');
Route::get('/specializations', 'profile_controller@getSpecialization')->name('specializations');
Route::get('/job_positions', 'profile_controller@getJobPosition')->name('job_positions');
Route::post('/social_media/confirm_like', ['uses' => 'social_media_controller@confirm_like'])->name('confirm_like');
Route::post('/social_media/confirm_unlike', ['uses' => 'social_media_controller@confirm_unlike'])->name('confirm_unlike');
Route::post('/social_media/add_comment', ['uses' => 'social_media_controller@add_comment'])->name('add_comment');