<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SendMessageController@index');
Route::post('/send', 'SendMessageController@sendMessage')->middleware('auth');

Route::get('/messages', 'MessagesController@index'); 
Route::get('/messages/{msg_id}', 'MessagesController@show'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::post('/home', 'HomeController@store')->middleware('auth');

//Route::get('/test', 'TestController@index'); 


