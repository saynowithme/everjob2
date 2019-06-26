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



Auth::routes(['verify' => true]);


Route::get('logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('candidates')->group(function () {
    Route::get('/', 'PagesController@getcandidates')->name('candidates');
    Route::get('/{id}', 'PagesController@getcandidateinfo')->name('candidate1','id');
});

Route::prefix('companies')->group(function(){
    Route::get('/','PagesController@getcompanies')->name('company');
    Route::get('/{id}', 'PagesController@getcompanyinfo')->name('company','id');
});

Route::prefix('jobs')->group(function(){
    Route::get('/', 'PagesController@getjobs')->name('job');
    Route::get('/{id}', 'PagesController@getjobinfo')->name('job1','id');
});

Route::get('/job-posting', function () {
    return view('everjob.job-posting.job-posting');
})->name('job-posting');

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::namespace('Auth')->group(function () {
        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('logout');
        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });
    Route::get('/', 'HomeController@index')->name('home')->middleware('guard.verified:admin');
});
