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


Route::get('/rate', 'ratingController@rate');
Route::post('saveRate', 'ratingController@saveRate');
Route::post('displayRate', 'ratingController@displayRate')->name('displayRate');