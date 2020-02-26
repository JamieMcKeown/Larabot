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

Route::get('/bot', 'botController@bot')
    ->name('botPage')
    ->middleware('auth');

Route::get('/logoff', 'botController@logoff')
    ->name('logoff');


Route::post('/msg', 'FormController@msg')
    ->name('enteredMsg')
    ->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
