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

Route::prefix('candidates')->middleware('auth')->group(function () {
    Route::get('/', 'PagesController@getcandidates')->name('candidates');
    Route::get('/{id}', 'PagesController@getcandidateinfo')->name('candidate1','id');
});

Route::prefix('companies')->group(function(){
    Route::get('/','PagesController@getcompanies')->name('company');
    Route::get('/{id}', 'PagesController@getcompanyinfo')->name('company1','id');
});

Route::prefix('jobs')->group(function(){
    Route::get('/', 'PagesController@getjobs')->name('job');
    Route::get('/{id}', 'PagesController@getjobinfo')->name('job1','id');
});

Route::prefix('job-posting')->middleware('auth')->group(function(){
    Route::get('/', 'PagesController@getpost')->name('job-posting');
    Route::post('/', 'PagesController@postAdd');
});

Route::prefix('cv-posting')->middleware('auth')->group(function(){
    Route::get('/', 'PagesController@getpostcv')->name('cv-posting');
    Route::post('/', 'PagesController@cvAdd');
});

Route::prefix('account')->middleware('auth')->group(function(){
    Route::get('/{id}', 'PagesController@getaccountinfo')->name('account','id');
    Route::post('/{id}', 'PagesController@updateAccount');
});

Route::get('search','PagesController@getsearch')->name('search');

Route::get('job-of-company/{id}', 'PagesController@getjobsbycompany')->name('job_company','id');

Route::get('category/{id}','PagesController@getcate')->name('cate','id');

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

//group for post_admin ... viet cai loz gi the nay ????
Route::prefix('post')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@getpostactive')->name('list-post');   
    Route::put('updateStatus', 'HomeController@updateStatus');
    Route::get('delete/{id}', 'HomeController@getDelete');
});

Route::prefix('categories')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@getcate')->name('list-cate');
    Route::get('add', 'HomeController@getAddCate')->name('cate-add');
    Route::post('add', 'HomeController@catAdd');          
    Route::get('update/{id}', 'HomeController@getCateUpdate');
    Route::post('update/{id}', 'HomeController@catUpdate');   
    Route::get('delete/{id}', 'HomeController@catedelete');
});

// Register 
Route::get('get-form',['uses'=> 'handleRegisterController@getForm']);
Route::post('handle-form',['uses'=>'handleRegisterController@handleRequest']);
Route::get('register-sucess', function(){
    return view('auth.registerSuccess');
})->name('register-success');