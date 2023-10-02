<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AcademicYearsController;
use App\Http\Controllers\CouresAnnuals;

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

Route::get('/studentAnnuals', [StudentController::class, 'index']);
Route::get('/studentAnnuals/create', [StudentController::class, 'store'])->name('studentAnnuals/create');

Route::get('/studentAnnuals/edit', function () {
    return view('edit_Student');
})->name('studentAnnuals/edit');

Route::get('/studentAnnuals/show', function () {
    return view('showStudent');
})->name('studentAnnuals/show');


Route::get('/coursesAnnually',[CouresAnnuals::class, 'index'])->name('courseAnnuals');

Route::get('CourseAnnually/create', function () {
    return view('create_Coures');
})->name('CourseAnnually/create');

Route::get('/coursesAnnually/inputScore', [CouresAnnuals::class, 'inputScores'])->name('inputScore');

Route::get('/coursesProgram', function () {
    return view('coursesProgram');
})->name('coursesProgram');

Route::get('/coursesProgram/create', function () {
    return view('createCoursesProgram');
})->name('coursesProgram/create');

Route::get('/admin/profile', function () {
    return view('profile');
})->name('admin/profile');

Route::get('/admin', function () {
    return view('edit_info');

})->name('admin');

Route::get('/changepw', function () {
    return view('changepass');
})->name('changepw');

//register
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register/submit/', [AuthController::class,'register_submit'])->name('register_submit');
//login
Route::get('/', [AuthController::class,'login'])->name('login');
Route::post('/login/submit/', [AuthController::class,'login_submit'])->name('login_submit');




