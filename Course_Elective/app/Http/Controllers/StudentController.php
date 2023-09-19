<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYears;
use App\Models\Degrees;
use App\Models\Students;
use App\Models\Genders;
use App\Models\Grades;
use App\Models\Departments;
use App\Models\DepartmentOptions;
use App\Models\Semesters;
use App\Models\Origins;
use App\Models\HeighSchools;
use App\Models\Promotions;
use App\Models\Groups;
use App\Models\Histories;
use App\Models\Scholarships;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $optionAc = AcademicYears::all();
        $optionDegrees = degrees::all();
        $optionGenders = genders::all();
        $optionGrades = grades::orderBy('id', 'desc')->get();
        $departments = departments::all();
        $departmentOption = departmentOptions::all();
        $semestersOption = semesters::all();
        $originOption = Origins::all();

        $addStudent = Students::orderBy('id', 'desc')->get(); //'desc' for order big to small

        return view('studentAnnuals', compact('addStudent','optionAc','optionDegrees','optionGenders','optionGrades','departments','departmentOption','semestersOption','originOption')); // compact use for transfer date to show page
    }
    //create function
    public function store(){

        $optionGenders = genders::all();
        $originOption = Origins::all();
        $heighSchoolOps = HeighSchools::all();
        $optionAc = AcademicYears::all();
        $promotions = promotions::all();
        $optionDegrees = degrees::all();
        $optionGrades = grades::orderBy('id', 'desc')->get();
        $departments = departments::all();
        $departmentOption = departmentOptions::all();
        $groups = groups::all();
        $histories = histories::all();
        $scholarships = scholarships::all();

        return view('createStudent', compact('optionGenders','originOption','heighSchoolOps','optionAc','promotions','optionDegrees','optionGrades','departments','departmentOption','groups','histories','scholarships'));

    }

}
