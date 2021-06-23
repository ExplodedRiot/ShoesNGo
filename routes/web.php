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
Route::get('message/{id}',[App\Http\Controllers\MessageController::class, 'index'])->name('home');
Route::post('message/{id}', [App\Http\Controllers\MessageController::class, 'message'])->name('message');
Route::get('check-out/{id}', [App\Http\Controllers\MessageController::class, 'check-out'])->name('check-out');
Route::delete('check-out/{id}',[App\Http\Controllers\MessageController::class, 'delete'])->name('delete');

Route::get('check-out-confirmation', [App\Http\Controllers\MessageController::class, 'confirm']);

Route::get('profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('home');
Route::get('profile',[App\Http\Controllers\ProfileController::class, 'profile'])->name('update');

Route::get('history',[App\Http\Controllers\HistoryController::class, 'index'])->name('home');
Route::get('history',[App\Http\Controllers\HistoryController::class, 'detail'])->name('detail');

