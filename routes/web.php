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

Route::get('/', function () {
    return view('home');
});

Route::get('/Formations', function () {
    return view('training');
});

Route::get('/Blog', function () {
    return view('blog');
});

Route::get('/Adhésion', function () {
    return view('membership.blade.php');
});

Route::get('/A propos', function () {
    return view('about.blade.php');
});

Route::get('/Dashboard', function () {
    return view('dashboard');
});
