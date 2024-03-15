<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => view('home'))->name('home');
Route::get('/code-of-conduct', fn () => view('code-of-conduct'))->name('code-of-conduct');
Route::get('/privacy-policy', fn () => view('privacy-policy'))->name('privacy-policy');
