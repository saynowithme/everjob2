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

Route::get('/', function () {
    return view('everjob.index');
});

Auth::routes();

Route::get('logout', function (){
    Auth::logout();
    return redirect('/login');
    });

Route::get('/home', 'HomeController@index')->name('home');
