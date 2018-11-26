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
Route::get('/about-us', 'about_controller@get_about')->name('about_us');
Route::get('/blog', 'blog_controller@get_blog')->name('blog');
Route::get('/blog/detail', 'blog_controller@get_blog_detail')->name('blog_detail');

Route::get('/corporate/login', 'auth_controller@job_creator_login')->name('job_creator_login');
Route::post('/corporate/login', ['uses' => 'auth_controller@job_creator_store', 'before' => 'csrf'])->name('job_creator_login_submit');
Route::get('/corporate/register', 'job_creator_controller@create')->name('create_job_creator');
Route::post('/corporate/register', ['uses' => 'job_creator_controller@store', 'before' => 'csrf'])->name('create_job_creator_submit');

Route::get('/job-seeker/login', 'auth_controller@job_finder_login')->name('job_finder_login');
Route::post('/job-seeker/login', ['uses' => 'auth_controller@job_finder_store', 'before' => 'csrf'])->name('job_finder_login_submit');
Route::get('/job-seeker/register', 'job_finder_controller@create')->name('create_job_finder');
Route::post('/job-seeker/register', ['uses' => 'job_finder_controller@store', 'before' => 'csrf'])->name('create_job_finder_submit');

Route::get('/forgot-password', 'auth_controller@get_forgot_password')->name('forgot_password');
Route::post('/forgot-password', 'auth_controller@do_forgot_password')->name('reset_password');

//logout
Route::get('/logout', 'auth_controller@destroy')->name('logout');


// Middleware check if no session redirect to login page
// Route::group(['middleware' => ['RedirectIfAuthenticated']], function () {

    Route::get('/user_home', 'home_controller@user_home')->name('user_home');
    Route::post('/advance_search_home', ['uses' => 'home_controller@advance_search_home', 'before' => 'csrf'])->name('advance_search_home');
    //for job finder
    Route::get('/job_finder_about_us', 'home_controller@job_finder_about_us')->name('job_finder_about_us');
    Route::get('/profile', 'profile_controller@create')->name('profile');
    Route::get('/get_job', 'job_controller@get_job')->name('get_job');
    Route::get('/job_finder_blog', 'home_controller@job_finder_blog')->name('job_finder_blog');
    Route::get('/job_finder_contact', 'home_controller@job_finder_contact')->name('job_finder_contact');
    
    Route::post('/submit_profile', ['uses' => 'profile_controller@store', 'before' => 'csrf'])->name('submit_profile');
    Route::get('edit_detail_experience/{id}/detail', 'profile_controller@edit_detail_experience')->name('edit_detail_experience');
    Route::get('delete_skill/{id}/detail', 'profile_controller@delete_skill')->name('delete_skill');
    Route::post('/submit_detail_experience', ['uses' => 'profile_controller@submit_detail_experience', 'before' => 'csrf'])->name('submit_detail_experience');
    Route::get('/job/{id}/detail', 'job_controller@get_job_detail')->name('job_detail');
    Route::get('get_detail_job/{id}/edit', 'job_controller@get_detail_job')->name('get_detail_job');
    Route::get('apply_detail_job/{id}/edit', 'job_controller@apply_detail_job')->name('apply_detail_job');
    Route::post('/apply_detail_job_post', ['uses' => 'job_controller@apply_detail_job_post', 'before' => 'csrf'])->name('apply_detail_job_post');

    //for job creator
    Route::get('/job_creator_about_us', 'home_controller@job_creator_about_us')->name('job_creator_about_us');
    Route::get('/job_creator_maintain_user', 'maintain_user_controller@job_creator_maintain_user')->name('job_creator_maintain_user');
    Route::get('/resume', 'resume_controller@create')->name('resume');
    Route::get('/company_profile', 'job_creator_controller@company_profile')->name('company_profile');
    
    Route::get('/get_job_per_customer', 'job_controller@get_job_per_customer')->name('get_job_per_customer');
    Route::get('/job_creator_blog', 'home_controller@job_creator_blog')->name('job_creator_blog');
    Route::get('/job_creator_contact', 'home_controller@job_creator_contact')->name('job_creator_contact');

    //job post
    Route::post('submit_company_profile', ['uses' => 'job_creator_controller@submit_company_profile', 'before' => 'csrf'])->name('submit_company_profile');
    Route::get('resume_detail/{id}/detail', 'resume_controller@resume_detail')->name('resume_detail');
    Route::get('resume_simple_search', 'resume_controller@get_simple_search')->name('resume_simple_search');
    Route::post('resume_simple_search_submit', ['uses' => 'resume_controller@simple_search_submit', 'before' => 'csrf'])->name('resume_simple_search_submit');
    Route::get('resume_advance_search', 'resume_controller@get_advance_search')->name('resume_advance_search');
    Route::post('resume_advance_search_submit', ['uses' => 'resume_controller@advance_search_submit', 'before' => 'csrf'])->name('resume_advance_search_submit');
    Route::get('get_detail_job_post/{id}/edit', 'job_controller@get_detail_job_post')->name('get_detail_job_post');
    Route::get('edit_detail_job_post/{id}/edit', 'job_controller@edit_detail_job_post')->name('edit_detail_job_post');
    Route::post('/update_detail_job_post', ['uses' => 'job_controller@update_detail_job_post', 'before' => 'csrf'])->name('update_detail_job_post');
    
    Route::get('delete_detail_job_post/{id}/edit', 'job_controller@delete_detail_job_post')->name('delete_detail_job_post');

    Route::get('detail_applicant_job_post/{id}/view_detail', 'job_controller@detail_applicant_job_post')->name('detail_applicant_job_post');
    Route::get('get_detail_applicant_job_post/{id}/view_applicant', 'job_controller@get_detail_applicant_job_post')->name('get_detail_applicant_job_post');  

    Route::get('/job_creator_post_register', 'job_controller@job_creator_post_register')->name('job_creator_post_register');
    Route::post('/job_creator_post_store', ['uses' => 'job_controller@job_creator_post_store', 'before' => 'csrf'])->name('job_creator_post_store');

    Route::get('/job_creator_create_user', 'maintain_user_controller@job_creator_create_user')->name('job_creator_create_user');
    Route::post('/job_creator_create_user_post', ['uses' => 'maintain_user_controller@store', 'before' => 'csrf'])->name('job_creator_create_user_post');
    Route::get('job_creator_detail_user/{id}/edit', 'maintain_user_controller@job_creator_detail_user')->name('job_creator_detail_user');
    Route::get('job_creator_update_user/{id}/edit', 'maintain_user_controller@job_creator_update_user')->name('job_creator_update_user');

    Route::post('/update_detail_user', ['uses' => 'maintain_user_controller@update_detail_user', 'before' => 'csrf'])->name('update_detail_user');

    Route::get('/resume/bookmark', 'resume_controller@get_bookmarked_resume')->name('bookmarked_resume');
    Route::get('/resume/retrieved', 'resume_controller@get_retrieved_resume')->name('retrieved_resume');

// });