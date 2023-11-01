@extends('layout.app')
@section('edit_courseAnnuall')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    {{-- search selection option --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/createCourse.css')}}">
    <script src="{{asset('js/create_course.js')}}"></script>

    <title></title>
    <style>
        @import 'path/to/bootstrap-source/_reboot.scss';
        /* Override Bootstrap styles */
        ol, ul {
            padding-left:0;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-light">
        <header class="py-2">
            <span class="fs-3">Course Annually</span>
            <span class="px-3 ">Detail of an course</span>
        </header>

        <div class="content">
            <div class="p-2 px-3 lead">
                <span>Update general/elective course</span>
            </div>
            <div class="container">
                <div class="w-100">
                    <div class="row mb-3">
                        <label for="Coure_name" class="col-2 form-label col-form-label-md text-end fw-bolder">Cource Name <sup>*</sup></label>
                        <div class="col-sm-6">
                            <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="Coure_name" required>
                                <option value="" disabled selected>Select a course program</option>
                                <optgroup label="TC">
                                    <option value="1178" time_course="32" time_tp="0" time_td="0" name_kh="ទស្សនវិជ្ជា" name_en="Philosophy" name_fr="Phylosophie" credit="2" dept="8" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | Philosophy
                                    </option>
                                    <option value="1179" time_course="0" time_tp="96" time_td="0" name_kh="បារាំង" name_en="French" name_fr="Français" credit="3" dept="8" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | French
                                    </option>
                                    <option value="2039" time_course="32" time_tp="0" time_td="32" name_kh="គណិតគណនាវគ្គ១" name_en="Calculus I" name_fr="Analyse I" credit="3" dept="8" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | Calculus I
                                    </option>
                                </optgroup>
                                <optgroup label="SF">
                                    <option value="1734" time_course="96" time_tp="0" time_td="0" name_kh="ភាសាបារាំងឆ្នាំទី១" name_en="French I1-A1" name_fr="Français I1-A1" credit="3" dept="13" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | French I1-A1
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lacturer" class="col-2 form-label col-form-label-md text-end fw-bolder">Lecturer</label>
                        <div class="col-sm-6">
                            <select name="" id="select_lecturer" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value=""></option>
                                {{-- @foreach ($employees as $e)
                                    <option value="{{$e->id}}">{{$e->name_latin}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="acaYear" class="col-2 form-label col-form-label-md text-end fw-bolder">Academic Year <sup>*</sup></label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="acaYear" required>
                                <option value="" selected>Academic year</option>
                                {{-- @foreach ($optionAc as $e)
                                    <option value="{{$e->id}}">{{$e->name_latin}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="semester" class="col-2 form-label col-form-label-md text-end fw-bolder">Semester <sup>*</sup></label>
                        <div class="col-sm-7">
                            <select  name="" id="semeter" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>Semester</option>
                                {{-- @foreach ($semestersOption as $e)
                                    <option value="{{$e->id}}">{{$e->name_en}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="degree" class="col-2 form-label col-form-label-md text-end fw-bolder">Degree<sup>*</sup></label>
                        <div class="col-sm-7">
                            <select  name="" id="degree" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>Degree</option>
                                {{-- @foreach ($optionDegrees as $e)
                                    <option value="{{$e->id}}">{{$e->name_kh}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="grade" class="col-2 form-label col-form-label-md text-end fw-bolder">grade <sup>*</sup></label>
                        <div class="col-sm-10">
                            <select  name="" id="grade" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>grade</option>
                                {{-- @foreach ($optionGrades as $e)
                                    <option value="{{$e->id}}">{{$e->name_kh}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <label for="department" class="col-2 form-label col-form-label-md text-end fw-bolder">Department <sup>*</sup></label>
                        <div class="col-sm-4">
                            <select  name="" id="department" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>Department</option>
                                {{-- @foreach ($departments as $e)
                                    <option value="{{$e->id}}">{{$e->code}}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <label for="department" class="col-2 form-label col-form-label-md text-end fw-bolder">Option</label>
                        <div class="col-sm-4">
                            <select class="form-control form-control-sm  shadow-none" id="department_option_id" name="department_option_id">
                            <option value="" selected=""></option>
                            {{-- @foreach ($departmentOption as $e)
                                <option value="{{$e->id}}">{{$e->code}}</option>
                            @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">
                            <div class="form-check float-end">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Group
                                </label>
                              </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Time_course" class="col-2 form-label col-form-label-md text-end fw-bolder">Time Course <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="number"  class="form-control form-control-sm shadow-none" name="" id="Time_course" style="width: 70%;">
                        </div>
                        <label for="credit" class="col-2 form-label col-form-label-md text-end fw-bolder">Credit<sup>*</sup></label>
                        <div class="col-4">
                            <input class="form-control form-control-sm  shadow-none" type="text" name="credit" id="credit">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Time_TP" class="col-2 form-label col-form-label-md text-end fw-bolder">Time TP <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="number"  class="form-control form-control-sm shadow-none" name="" id="Time_TP" style="width: 70%;">
                        </div>
                        <label for="Name_khmer" class="col-2 form-label col-form-label-md text-end fw-bolder">Name Khmer </label>
                        <div class="col-4">
                            <input class="form-control form-control-sm  shadow-none" type="text" name="credit" id="Name_khmer">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Time_TD" class="col-2 form-label col-form-label-md text-end fw-bolder">Time TD <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="number"  class="form-control form-control-sm shadow-none" name="" id="Time_TD" style="width: 70%;">
                        </div>
                        <label for="credit" class="col-2 form-label col-form-label-md text-end fw-bolder">Name English</label>
                        <div class="col-4">
                            <input class="form-control form-control-sm shadow-none" type="text" name="credit" id="credit">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name_fr" class="col-lg-8 col-form-label-md fw-bolder  text-end control-label ">Name French</label>
                        <div class="col-sm-4">
                            <input class="form-control form-control-sm shadow-none" type="text" name="" id="name_fr">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Scoring" class="col-2 form-label col-form-label-md text-end">Scoring <sup>*</sup></label>
                        <div class="col-lg-10">
                            <div class="box box-solid" style="border-top: 1px solid #d2d6de" id="scoring_panel">
                                <div class="box-body" style="padding:10px 0 0 0">
                                    <div class="col-md-7 col-7">
                                        <div class="normal_scoring_panel">
                                            <div class="row mt-2">
                                                <label for="absence" data-toggle="tooltip" data-placement="top" title="" class="col-lg-12  text-end control-label required" data-original-title="When you allow student to take supplementary of this course. You must check this option for enabling the inputing score of this subject!">
                                                    10%-Absence
                                                    <input id="absence" type="checkbox" checked value="10" name="is_having_resitted" style="font-size: 18pt" value="1"><span style="color: red"> *</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <label for="selectPercentage" class="col-sm-5 form-label fw-bolder control-label text-end">Mitdterm Score <sup>*</sup></label>
                                            <div class="col-sm-7">
                                                <select class="form-select form-select-sm form-control shadow-none" id="selectPercentage">
                                                    <option value="0">0%</option>
                                                    <option value="30" selected>30%</option>
                                                    <option value="40">40%</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputValue" class="col-sm-5 form-label form-label-md fw-bolder control-label  text-end required">Final Score <sup>*</sup></label>
                                            <div class="col-sm-7">
                                                <input type="number" class="form-control form-control-sm shadow-none" id="inputValue" min="0" max="100" required="required" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <label for="inputValue" class="col-2 form-label form-label-md fw-bolder control-label  text-end required">Permit responsibility to </label>
                        <div class="col-sm-2">
                            <select  name="" id="department" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>Department</option>
                                <option value="20">AMS</option>
                                <option value="21">GAR</option>
                                <option value="1">GCA</option>
                                <option value="2">GCI</option>
                                <option value="3">GEE</option>
                                <option value="7">GGG</option>
                                <option value="4">GIC</option>
                                <option value="5">GIM</option>
                                <option value="6">GRU</option>
                                <option value="18">GS</option>
                                <option value="22">GTI</option>
                                <option value="16">GTR</option>
                                <option value="19">IME</option>
                                <option value="17">OAC</option>
                                <option value="12">SA</option>
                                <option value="13">SF</option>
                                <option value="8">TC</option>
                            </select>
                        </div>
                        <label for="inputValue" class="col-sm-5 form-label form-label-md fw-bolder control-label  text-end required">Type Course </label>
                        <div class="col-sm-2">
                            <select  name="" id="Type_Course" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="gerneral_cursse" >Gerneral Cursse</option>
                                <option value="elective_course">Elective Course</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="container" style="margin-top: 3rem;">

                <form action="" class="w-100">
                    <div class="row mb-5">

                        <div class="col-sm-12 d-flex justify-content-center">

                            <a type="button" href="{{route('CourseAnnually/create')}}"class="btn btnCancel shadow-none mr-2">Cancel</a>


                            <button class="btnCreate mx-1" type="submit">
                                <span>Update</span>
                                <span>
                                    Sure ?
                                </span>
                                <span>
                                    Update !
                                <svg id="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M8.00011 13L12.2278 16.3821C12.6557 16.7245 13.2794 16.6586 13.6264 16.2345L22.0001 6"></path> <path fill="#ffffff" d="M11.1892 12.2368L15.774 6.63327C16.1237 6.20582 16.0607 5.5758 15.6332 5.22607C15.2058 4.87635 14.5758 4.93935 14.226 5.36679L9.65273 10.9564L11.1892 12.2368ZM8.02292 16.1068L6.48641 14.8263L5.83309 15.6248L2.6 13.2C2.15817 12.8687 1.53137 12.9582 1.2 13.4C0.868627 13.8419 0.95817 14.4687 1.4 14.8L4.63309 17.2248C5.49047 17.8679 6.70234 17.7208 7.381 16.8913L8.02292 16.1068Z" clip-rule="evenodd" fill-rule="evenodd"></path></g></svg>
                                </span>
                            </button>

                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
</html>
@endsection
