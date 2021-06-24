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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('message/{id}', 'App\Http\Controllers\MessageController@index');
Route::post('message/{id}', 'App\Http\Controllers\MessageController@message');
Route::get('check-out', 'App\Http\Controllers\MessageController@check_out');
Route::delete('check-out/{id}','App\Http\Controllers\MessageController@delete');

Route::get('check-out-confirmation', 'App\Http\Controllers\MessageController@confirmation');

Route::get('profile','App\Http\Controllers\ProfileController@index');
Route::post('profile','App\Http\Controllers\ProfileController@update');

Route::get('history','App\Http\Controllers\HistoryController@index');
Route::get('history/{id}','App\Http\Controllers\HistoryController@detail');

