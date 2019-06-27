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

Route::get('/', 'HomeController@index')->name('home');

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

<<<<<<< HEAD
Route::get('/job-posting', 'PagesController@getpost')->name('job-posting');
=======
Route::prefix('job-posting')->group(function(){
    Route::get('/', 'PagesController@getpost')->name('job-posting');
    Route::post('/', 'PagesController@postAdd');
});


>>>>>>> f44ef31b3d6b1a4e5bc02ee200e53c3b7f0c106a

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
});

// Register 
Route::get('get-form',['uses'=> 'handleRegisterController@getForm']);
Route::post('handle-form',['uses'=>'handleRegisterController@handleRequest']);
