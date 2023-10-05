<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scores;
use App\Models\AcademicYears;
use App\Models\Departments;
use App\Models\Semesters;
use App\Models\Degrees;
use App\Models\Grades;
use App\Models\Employees;
use App\Models\DepartmentOptions;

class CouresAnnuals extends Controller
{
    public function index()
    {
        $optionAc = AcademicYears::orderBy('id', 'desc')->get();
        $optionDegrees = degrees::all();
        $employees = Employees::all();
        // $optionGenders = genders::all();
        $optionGrades = grades::orderBy('id', 'desc')->get();
        $departments = departments::all();
        // $departmentOption = departmentOptions::all();
        $semestersOption = semesters::all();

        return view("coursesAnnually", compact('optionAc', 'departments', 'semestersOption', 'optionDegrees', 'optionGrades', 'employees'));
    }

    public function create()
    {
        $employees = Employees::all();
        $optionAc = AcademicYears::orderBy('id', 'desc')->get();
        $optionDegrees = degrees::all();
        $optionGrades = grades::all();
        $departments = departments::orderBy('id', 'desc')->get();
        $departmentOption = departmentOptions::all();
        $semestersOption = semesters::all();


        return view("create_Coures", compact('optionAc', 'employees', 'semestersOption', 'optionDegrees', 'optionGrades', 'departments', 'departmentOption'));
    }

    public function store(Request $request){
        dd($request->input());
    }


    public function inputScores(){
        $students = Scores::orderBy('id', 'asc')->get(); // desc to display by order big to small , asc to display small to big
        return view('inputScore', compact('students'));
    }


}
