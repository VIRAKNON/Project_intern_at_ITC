<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYears;
use App\Models\Degrees;
use App\Models\Students;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $addStudent = Students::orderBy('id', 'desc')->get(); //'desc' for order big to small
        return view('studentAnnuals', compact('addStudent')); // compact use for transfer date to show page
    }

    // public function academicOption(){
    //     $optionAc = AcademicYears::all();
    //     // return view('studentAnnuals', compact('optionAc'));
    //     return view('studentAnnuals', [
    //         'optionAc' =>  $optionAc
    //     ]);
    // }

    // public function degreesOption(){
    //     $optionDegrees = degrees::all();
    //     return view('studentAnnuals', compact('optionDegrees'));
    // }

}
