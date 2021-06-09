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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('message/{id}','MessageController@index');
Route::post('message/{id}', 'MessageController@message');
Route::get('check-out', 'MessageController@check_out');
Route::delete('check-out/{id}', 'MessageController@delete');

Route::get('check-out-confirmation', 'MessageController@confirm');

Route::get('profile','ProfileController@index');

