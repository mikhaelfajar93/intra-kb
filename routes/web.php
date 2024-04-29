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
    return view('dashboard');
});

Route::get('/comp-list', function () {
    return view('comp_list');
});

Route::get('/hrd-list', function () {
    return view('hrd_list');
});

Route::get('/it-list', function () {
    return view('it_list');
});

Route::get('/legal-list', function () {
    return view('legal_list');
});

Route::get('/comp-upload', function () {
    return view('comp_upload');
});

Route::get('/hrd-upload', function () {
    return view('hrd_upload');
});

Route::get('/it-upload', function () {
    return view('it_upload');
});

Route::get('/legal-upload', function () {
    return view('legal_upload');
});

Route::get('/logout', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
