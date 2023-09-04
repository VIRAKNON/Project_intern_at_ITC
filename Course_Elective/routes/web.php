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
Route::get('/admin/dashboard', function(){
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

Route::get('/studentAnnuals/edit', function () {
    return view('createStudent');
})->name('studentAnnuals/edit');

Route::get('/studentAnnuals/show', function () {
    return view('showStudent');
})->name('studentAnnuals/show');

Route::get('/coursesAnnually', function () {
    return view('coursesAnnually');
});
<<<<<<< HEAD
Route::get('/admin/profile', function () {
=======
<<<<<<< HEAD
Route::get('/coursesProgram', function () {
    return view('coursesProgram');
});
Route::get('/coursesProgram/createCoursesProgram', function () {
    return view('createCoursesProgram');
});
=======
Route::get('/profile', function () {
>>>>>>> 8c5fb10b6f3442614644fe8d419ea70b33a8fb07
    return view('profile');
})->name('admin/profile');

Route::get('/admin', function () {
    return view('edit_info');
})->name('admin');
Route::get('/changepw', function () {
    return view('changepass');
})->name('changepw');

<<<<<<< HEAD

=======
>>>>>>> 30d5bcde25cef4fd8a40f643cafe1d7966b5fcd9
>>>>>>> 480c8febc377c9237f3e28cc5ac4c2908e97cd25
