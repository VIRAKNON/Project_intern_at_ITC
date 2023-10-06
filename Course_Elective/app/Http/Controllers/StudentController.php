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
use App\Models\StudentAnnuals;
use App\Helpers\Helper;
use DB;

class StudentController extends Controller
{
    protected $student, $student_annual;
    public function __construct()
    {
        $this->middleware('auth');

        $this->student = new Students();
        $this->student_annual = new StudentAnnuals();
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
    public function create(){
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
    //store function
    public function store(Request $request){

        $request->validate([
            'photo'=>'required|image|mimes:png,jpg,jpeg,gig|max:2048'
        ]);
        //cover
        $extension = $request->file('photo')->extension(); //extension() use to get extension of file
        // dd($extension);
        $fileName = date('YmdHis').'.'.$extension; // 2023082632510.jpg
        // dd($fileName);
        $request->file('photo')->move(public_path('uploads/'), $fileName); // use for move fileName to folder uploads

        DB::beginTransaction();
        try{
            $student = $this->student->create([
                'id_card' => Helper::id_card_generator(new Students, 'id_card', 4, 'e2023'), //id_card generator
                'name_kh' => $request->nameKh,
                'name_latin' => $request->nameLatin,
                'gender_id' => $request->gender,
                'dob' => $request->dob,
                'pob' => $request->pob,
                'radie' => $request->radie,
                'observation' => $request->observation,
                'origin_id' => $request->origin,
                'tel' => $request->phone,
                'email' => $request->email,
                'address_current' => $request->currentAddress,
                'address_permanent' => $request->perAddress,
                'parent_name' => $request->parentName,
                'parent_occupation' => $request->parentOcc,
                'parent_address' => $request->parentAddress,
                'parent_tel' => $request->parentTel,
                'highschool_id' => $request->hschool,
                'mcs_no' => $request->mcsNo,
                'can_id' => $request->canid,
                'photo' => $fileName,
            ]);
            $student_annual = $this->student_annual->create([
                'student_id' => $student->id,
                'academic_year_id' => $request->acaYear,
                'promotion_id' => $request->promotion,
                'degree_id' => $request->degree,
                'grade_id' => $request->grade,
                'department_id' => $request->department,
                'department_option_id' => $request->option,
                'group' => $request->group,
                'history_id' => $request->history,
                'scholarships_id' => $request->scholarships,
            ]);

            if($student && $student_annual){
                DB::commit();

            }
            else{
                DB::rollback();
            }
            session()->flash('success', '✔ Student created successfully!');
            return redirect()->back();
        }
        catch(Exception $ex){
            DB::rollback();
            return redirect()->back();
        }









        // $id_card =

        // return redirect()->route('studentAnnuals.store', compact('optionGenders','originOption','heighSchoolOps','optionAc','promotions','optionDegrees','optionGrades','departments','departmentOption','groups','histories','scholarships') );
    }

}
