<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYears;
use App\Models\Degrees;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function studentAannully(){
        return view('studentAnnuals');
    }

    public function academicOption(){
        $optionAc = academicYears::all();
        return view('studentAnnuals', compact('optionAc'));
    }

    public function degreesOption(){
        $optionDegrees = degrees::all();
        return view('studentAnnuals', compact('optionDegrees'));
    }

    // public function handleAllFunctions()
    // {
    //     // Call other controller methods here
    //     $result1 = $this->studentAannully();
    //     $result2 = $this->academicOption();
    //     $result3 = $this->degreesOption();

    //     // You can also pass data to your view or return a response
    //     return view('studentAnnuals', compact('result1', 'result2', 'result3'));
    // }
}
