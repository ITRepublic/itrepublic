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

Route::get('/', 'home_controller@get_home')->name('home');
Route::get('/about_us', 'about_controller@get_about')->name('about_us');

// login job creator
Route::get('/job_creator_login', 'auth_controller@job_creator_login')->name('job_creator_login');
Route::post('/job_creator_login_submit', ['uses' => 'auth_controller@job_creator_store', 'before' => 'csrf'])->name('job_creator_login_submit');

// job creator registration
Route::get('/job_creator/create', 'job_creator_controller@create')->name('create_job_creator');
Route::post('/job_creator/store', ['uses' => 'job_creator_controller@store', 'before' => 'csrf'])->name('create_job_creator_submit');

// login job finder
Route::get('/job_finder_login', 'auth_controller@job_finder_login')->name('job_finder_login');
Route::post('/job_finder_login_submit', ['uses' => 'auth_controller@job_finder_store', 'before' => 'csrf'])->name('job_finder_login_submit');

// job finder registration
Route::get('/job_finder/create', 'job_finder_controller@create')->name('create_job_finder');
Route::post('/job_finder/store', ['uses' => 'job_finder_controller@store', 'before' => 'csrf'])->name('create_job_finder_submit');

//logout
Route::get('/logout', 'auth_controller@destroy')->name('logout');


// Middleware check if no session redirect to login page
// Route::group(['middleware' => ['RedirectIfAuthenticated']], function () {

    //for job finder
    Route::get('/job_finder_home', 'home_controller@job_finder_home')->name('job_finder_home');
    Route::get('/job_finder_about_us', 'home_controller@job_finder_about_us')->name('job_finder_about_us');
    Route::get('/get_job', 'job_controller@get_job')->name('get_job');
    Route::get('/job_finder_blog', 'home_controller@job_finder_blog')->name('job_finder_blog');
    Route::get('/job_finder_contact', 'home_controller@job_finder_contact')->name('job_finder_contact');

    Route::get('/job/{id}/detail', 'job_controller@get_job_detail')->name('job_detail');
    Route::get('get_detail_job/{id}/edit', 'job_controller@get_detail_job')->name('get_detail_job');
    Route::get('apply_detail_job/{id}/edit', 'job_controller@apply_detail_job')->name('apply_detail_job');
    Route::post('/apply_detail_job_post', ['uses' => 'job_controller@apply_detail_job_post', 'before' => 'csrf'])->name('apply_detail_job_post');

    //for job creator
    Route::get('/job_creator_home', 'home_controller@job_creator_home')->name('job_creator_home');
    Route::get('/job_creator_about_us', 'home_controller@job_creator_about_us')->name('job_creator_about_us');
    Route::get('/job_creator_maintain_user', 'maintain_user_controller@job_creator_maintain_user')->name('job_creator_maintain_user');
    Route::get('/get_job_per_customer', 'job_controller@get_job_per_customer')->name('get_job_per_customer');
    Route::get('/job_creator_blog', 'home_controller@job_creator_blog')->name('job_creator_blog');
    Route::get('/job_creator_contact', 'home_controller@job_creator_contact')->name('job_creator_contact');

    //job post
    Route::get('/job_creator_post', 'job_controller@get_job_per_customer')->name('job_creator_post');
    Route::get('get_detail_job_post/{id}/edit', 'job_controller@get_detail_job_post')->name('get_detail_job_post');
    Route::get('edit_detail_job_post/{id}/edit', 'job_controller@edit_detail_job_post')->name('edit_detail_job_post');
    Route::post('/update_detail_job_post', ['uses' => 'job_controller@update_detail_job_post', 'before' => 'csrf'])->name('update_detail_job_post');
    
    Route::get('delete_detail_job_post/{id}/edit', 'job_controller@delete_detail_job_post')->name('delete_detail_job_post');

    Route::get('detail_applicant_job_post', 'job_controller@detail_applicant_job_post')->name('detail_applicant_job_post');
    Route::get('get_detail_applicant_job_post/{id}/view_applicant', 'job_controller@get_detail_applicant_job_post')->name('get_detail_applicant_job_post');  

    Route::get('/job_creator_post_register', 'job_controller@job_creator_post_register')->name('job_creator_post_register');
    Route::post('/job_creator_post_store', ['uses' => 'job_controller@job_creator_post_store', 'before' => 'csrf'])->name('job_creator_post_store');

    Route::get('/job_creator_create_user', 'maintain_user_controller@job_creator_create_user')->name('job_creator_create_user');
    Route::post('/job_creator_create_user_post', ['uses' => 'maintain_user_controller@store', 'before' => 'csrf'])->name('job_creator_create_user_post');
    Route::get('job_creator_detail_user/{id}/edit', 'maintain_user_controller@job_creator_detail_user')->name('job_creator_detail_user');
    Route::get('job_creator_update_user/{id}/edit', 'maintain_user_controller@job_creator_update_user')->name('job_creator_update_user');

    Route::post('/update_detail_user', ['uses' => 'maintain_user_controller@update_detail_user', 'before' => 'csrf'])->name('update_detail_user');

// });

Route::get('/blog', 'blog_controller@get_blog')->name('blog');
Route::get('/blog/detail', 'blog_controller@get_blog_detail')->name('blog_detail');
Route::get('/contact', 'contact_controller@get_contact')->name('contact');