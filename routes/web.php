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
Route::get('/account/{id}/verification', ['uses' => 'job_finder_controller@verify_account', 'before' => 'csrf'])->name('account_verification');

Route::get('/forgot-password', 'auth_controller@get_forgot_password')->name('forgot_password');
Route::post('/forgot-password', 'auth_controller@do_forgot_password')->name('reset_password');

Route::get('/logout', 'auth_controller@destroy')->name('logout');


// Middleware check if no session redirect to login page
// Route::group(['middleware' => ['RedirectIfAuthenticated']], function () {
    Route::get('/job-list/search', ['uses' => 'home_controller@advance_search_home', 'before' => 'csrf'])->name('advance_search_home');
    
    // FOR JOB SEEKER
    Route::get('/profile', 'profile_controller@create')->name('profile');

    Route::get('/job-list', 'job_controller@get_job')->name('get_job');
    Route::get('/job-list/{id}/detail', 'job_controller@get_detail_job')->name('get_detail_job');
    Route::get('/job-list/{id}/apply', 'job_controller@apply_detail_job')->name('apply_detail_job');
    Route::post('/job-list/apply', ['uses' => 'job_controller@apply_detail_job_post', 'before' => 'csrf'])->name('apply_detail_job_post');

    Route::post('/profile/edit', ['uses' => 'profile_controller@store', 'before' => 'csrf'])->name('submit_profile');
    Route::post('/experience/add', ['uses' => 'profile_controller@submit_detail_experience', 'before' => 'csrf'])->name('submit_detail_experience');
    Route::get('/experience/{id}/edit', 'profile_controller@edit_detail_experience')->name('edit_detail_experience');
    Route::get('/skill/{id}/delete', 'profile_controller@delete_skill')->name('delete_skill');
    
    Route::get('/social_media', 'social_media_controller@create')->name('social_media');
    Route::get('/friends_connect', 'social_media_controller@friends_connect')->name('friends_connect');
    // FOR CORPORATE
    Route::get('/corporate', 'home_controller@user_home')->name('user_home');
   
    Route::get('/company-profile', 'job_creator_controller@company_profile')->name('company_profile');
    Route::post('company-profile/edit', ['uses' => 'job_creator_controller@submit_company_profile', 'before' => 'csrf'])->name('submit_company_profile');

    Route::get('/resume', 'resume_controller@create')->name('resume');
    Route::get('/resume/{id}/detail', 'resume_controller@resume_detail')->name('resume_detail');
    Route::get('/resume/simple-search', 'resume_controller@get_simple_search')->name('resume_simple_search');
    Route::post('/resume/simple-search', ['uses' => 'resume_controller@simple_search_submit', 'before' => 'csrf'])->name('resume_simple_search_submit');
    Route::get('/resume/advance-search', 'resume_controller@get_advance_search')->name('resume_advance_search');
    Route::post('/resume/advance-search', ['uses' => 'resume_controller@advance_search_submit', 'before' => 'csrf'])->name('resume_advance_search_submit');
    Route::get('/resume/bookmark', 'resume_controller@get_bookmarked_resume')->name('bookmarked_resume');
    Route::get('/resume/retrieved', 'resume_controller@get_retrieved_resume')->name('retrieved_resume');
    
    Route::get('/job-post', 'job_controller@get_job_per_customer')->name('get_job_per_customer');
    Route::get('/job-post/add', 'job_controller@job_creator_post_register')->name('job_creator_post_register');
    Route::post('/job-post/add', ['uses' => 'job_controller@job_creator_post_store', 'before' => 'csrf'])->name('job_creator_post_store');
    Route::get('/job-post/{id}/edit', 'job_controller@edit_detail_job_post')->name('edit_detail_job_post');
    Route::post('/job-post/edit', ['uses' => 'job_controller@update_detail_job_post', 'before' => 'csrf'])->name('update_detail_job_post');
    Route::get('/job-post/{id}/detail', 'job_controller@get_detail_job_post')->name('get_detail_job_post');
    Route::get('job-post/{id}/delete', 'job_controller@delete_detail_job_post')->name('delete_detail_job_post');
    Route::get('job-post/{id}/applicant-list', 'job_controller@detail_applicant_job_post')->name('detail_applicant_job_post');
    Route::get('job-post/applicant-list/{id}/detail', 'job_controller@get_detail_applicant_job_post')->name('get_detail_applicant_job_post');  

    Route::get('/job_creator_maintain_user', 'maintain_user_controller@job_creator_maintain_user')->name('job_creator_maintain_user');
    Route::get('/job_creator_create_user', 'maintain_user_controller@job_creator_create_user')->name('job_creator_create_user');
    Route::post('/job_creator_create_user_post', ['uses' => 'maintain_user_controller@store', 'before' => 'csrf'])->name('job_creator_create_user_post');
    Route::get('/job_creator_detail_user/{id}/edit', 'maintain_user_controller@job_creator_detail_user')->name('job_creator_detail_user');
    Route::get('/job_creator_update_user/{id}/edit', 'maintain_user_controller@job_creator_update_user')->name('job_creator_update_user');
    Route::post('/update_detail_user', ['uses' => 'maintain_user_controller@update_detail_user', 'before' => 'csrf'])->name('update_detail_user');

    Route::get('/resume/bookmark', 'resume_controller@get_bookmarked_resume')->name('bookmarked_resume');
    Route::get('/resume/{id}/bookmark', 'resume_controller@bookmark_resume')->name('bookmark_resume');
    Route::get('/resume/bookmark/search', 'resume_controller@get_bookmark_search')->name('get_bookmark_search');
    Route::get('/resume/retrieved', 'resume_controller@get_retrieved_resume')->name('retrieved_resume');
    Route::get('/resume/{id}/retrieve', 'resume_controller@retrieve_resume')->name('retrieve_resume');
    Route::get('/resume/retrieve/search', 'resume_controller@get_retrieve_search')->name('get_retrieve_search');
    Route::get('/download_resume/{file}', function ($file='') {
        return response()->download(storage_path('storage/app/resume/'.$file)); 
    });
// });