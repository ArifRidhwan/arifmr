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
    return view('welcome');
});
Route::group(['admin','as' => 'backend', 'middleware' => ['auth', 'role:admin']], function(){
    Route::get('/', function(){
        //return view ('hallo Admin');
    });
    Route::get('/home', function(){
        return view ('backend.bidang_studi.index');
    });
    Route::resource('user', 'UserController');
    Route::resource('bistud','BistudController');
});
Auth::routes(['register'=> false]);
Route::get('/home1', 'HomeController@index')->name('home');

