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
<<<<<<< HEAD
Route::get('/coursesProgram', function () {
    return view('coursesProgram');
});
Route::get('/coursesProgram/createCoursesProgram', function () {
    return view('createCoursesProgram');
});
=======
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/info', function () {
    return view('edit_info');
});
Route::get('/changepw', function () {
    return view('changepass');
});

>>>>>>> 30d5bcde25cef4fd8a40f643cafe1d7966b5fcd9
