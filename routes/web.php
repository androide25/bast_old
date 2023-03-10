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
Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class,'redirectToGoogle'])->name('auth/google');
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback'])->name('auth/google/callback');
Route::get('/auth/facebook', [App\Http\Controllers\Auth\FacebookController::class,'redirectToFacebok'])->name('auth/facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\Auth\FacebookController::class, 'handleFacebookCallback'])->name('auth/facebook/callback');







