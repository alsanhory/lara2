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



Route::get('test',function(){
    return 'hi';
});

Route::get('hi','TestingController@sayhi');

Route::get('jadeed','TestingController@sayhiagain');

Route::get('/','TestingController@index');
Route::get('about','TestingController@about');
Route::get('contact','TestingController@contact');

Route::get('test',function(){
    return view('homepages.test');
});

Route::get('calc','TestingController@showcalc');
Route::post('calc','TestingController@subcalc');