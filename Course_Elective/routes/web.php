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
Route::get('/', function(){
    return view('dashboard');
});

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/studentAnnuals', function () {
    return view('studentAnnuals');
})->name('studentAnnuals');

Route::get('/studentAnnuals/create', function () {
    return view('createStudent');
})->name('studentAnnuals/create');

Route::get('/studentAnnuals/show', function () {
    return view('showStudent');
})->name('studentAnnuals/show');

Route::get('/coursesAnnually', function () {
    return view('coursesAnnually');
});

Route::get('/coursesProgram', function () {
    return view('coursesProgram');
})->name('coursesProgram');

Route::get('/coursesProgram/create', function () {
    return view('createCoursesProgram');
})->name('coursesProgram/create');