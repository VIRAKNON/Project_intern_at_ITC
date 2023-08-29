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
<<<<<<< HEAD

=======
>>>>>>> ca9169bfef7398336cab20360de2e22243312abc
Route::get('/', function(){
    return view('dashboard');
});
//route using controller resource Student
Route::resource('/studentAnnuals','App\Http\Controllers\Student');

// Route::get('/studentAnnuals/create', function () {
//     return view('createStudent');
// });

Route::get('/coursesAnnually', function () {
    return view('coursesAnnually');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/info', function () {
    return view('edit_info');
});
Route::get('/changepw', function () {
    return view('changepass');
});

<<<<<<< HEAD
Route::get('/showStudent', function () {
    return view("showStudent");
});
=======
>>>>>>> ca9169bfef7398336cab20360de2e22243312abc
