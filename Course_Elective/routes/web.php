<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;



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
})->name('dashboard');

Route::get('/studentAnnuals', [StudentController::class, 'studentAannully'])->name('studentAnnuals');

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
=======
<<<<<<< HEAD
Route::get('/create_Coures', function () {
    return view('create_Coures');
});
=======
<<<<<<< HEAD
Route::get('/admin/profile', function () {
=======

Route::get('/admin/profile', function () {

>>>>>>> 79d81961257de351b4a10f7cb04a16dcb69965ab
>>>>>>> 6d1d21008da3c30a81919ac24fbe45a5cb94bd69
Route::get('/coursesProgram', function () {
    return view('coursesProgram');
});
Route::get('/coursesProgram/createCoursesProgram', function () {
    return view('createCoursesProgram');
});
Route::get('/admin/profile', function () {
    return view('profile');
})->name('admin/profile');

Route::get('/admin', function () {
    return view('edit_info');
})->name('admin');
Route::get('/changepw', function () {
    return view('changepass');
})->name('changepw');
<<<<<<< HEAD

//register
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register/submit/', [AuthController::class,'register_submit'])->name('register_submit');

//login
Route::get('/', [AuthController::class,'login'])->name('login');
Route::post('/login/submit/', [AuthController::class,'login_submit'])->name('login_submit');
=======
>>>>>>> f9b8af69e19630f91608520142cd2a14a13c14b1
>>>>>>> 6d1d21008da3c30a81919ac24fbe45a5cb94bd69
