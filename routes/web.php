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
    return view('front_page');
})->name('home1');

Route::get('mainpage',function(){
	return view('mainlayout/index');
});
Auth::routes();
Route::get('success',function(){
	return view('success');
});

Route::get('/home', 'HomeController@index')->name('home');


