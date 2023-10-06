<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Scores;
use App\Models\AcademicYears;
use App\Models\Semesters;
use App\Models\Degrees;
use App\Models\Grades;
use App\Models\Employees;
use App\Models\DepartmentOptions;


class CourseProgramController extends Controller
{
    public function index()
    {
        $optionAc = AcademicYears::orderBy('id', 'desc')->get();
        $optionDegrees = degrees::all();
        // $employees = Employees::all();
        // // $optionGenders = genders::all();
        $optionGrades = grades::orderBy('id', 'desc')->get();
        $departments = departments::all();
        // // $departmentOption = departmentOptions::all();
        $semestersOption = semesters::all();

        return view("coursesProgram", compact('departments', 'semestersOption', 'optionDegrees', 'optionGrades'));
    }

    public function create(){

        $optionDegrees = degrees::all();
        // $employees = Employees::all();
        // // $optionGenders = genders::all();
        $optionGrades = grades::orderBy('id', 'desc')->get();
        $departments = departments::all();
        $departmentOption = departmentOptions::all();
        $semestersOption = semesters::all();

        return view("createCoursesProgram", compact('departments', 'semestersOption', 'optionDegrees', 'optionGrades', 'departmentOption'));
    }
}
