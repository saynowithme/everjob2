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

Route::get('/', 'PagesController@getindex');

Auth::routes();


Route::get('logout', function (){
    Auth::logout();
    return redirect('/login');
    });

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('candidates')->group(function(){
    Route::get('/',function(){
        return view('everjob.candidate.candidateListing');
    })->name('candidates');
    Route::get('/{id}', function ($id) {
        return view('everjob.candidate.candidateDetail');
    });
});
Route::prefix('companies')->group(function(){
    Route::get('/','PagesController@getcompanies')->name('company');
    Route::get('/{id}', 'PagesController@getcompanyinfo')->name('company','id');
});

Route::prefix('jobs')->group(function(){
    Route::get('/', function () {
        return view('everjob.job.job');
    })->name('job');
    Route::get('/{id}', function ($id) {
        return view('everjob.job.jobDetail');
    });
});

Route::get('/job-posting',function(){
    return view('everjob.job-posting.job-posting');
})->name('job-posting');