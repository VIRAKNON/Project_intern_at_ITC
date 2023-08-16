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
    return view('studentAnnuals');
});
Route::get('/studentAnnuals/create', function () {
    return view('createStudent');
});
Route::get('/coursesAnnually', function () {
    return view('coursesAnnually');
});
