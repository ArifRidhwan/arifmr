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

Route::get('/home', 'HomeController@index')->name('home');
route::group(['prefix'=>'backend','middleware'=>['auth','role::seperadmin']],function(){
    route::resource('user','UserController');    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
