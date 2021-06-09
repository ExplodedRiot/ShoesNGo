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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('message/{id}',[App\Http\Controllers\HomeController::class, 'index']);
Route::post('message/{id}', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('check-out', [App\Http\Controllers\HomeController::class, 'index']);
Route::delete('check-out/{id}',[App\Http\Controllers\HomeController::class, 'index']);

Route::get('check-out-confirmation', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('profile',[App\Http\Controllers\HomeController::class, 'index']);

