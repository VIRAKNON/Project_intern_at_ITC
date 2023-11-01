@extends('layout.app')
@section('courseAnnualls')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/libraries/fonts.googleapis.css')}}" rel="stylesheet">

    <link href="{{asset('css/libraries/bootstrap@5.3.1_dist_css_bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="{{asset('js/libraries/bootstrap@5.3.1_dist_js.bundle.min.js')}}" ></script>
    {{-- search selection option --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/coures_annuall.css')}}">
    <script src="{{asset('js/coures_annually.js')}}"></script>
    <title>Course annually</title>
</head>
<body>
    <div class="container-fluid bg-light">
        <header class="py-2">
            <span class="fs-3">Course Annually</span>
            <span class="px-3">All existing course</span>
        </header>
        <div class="content">
            <div class="row">
                <div class="box1">
                    <span class="float-start px-2">
                        <div class="btn-group" role="group">
                            <a href="{{ route('CourseAnnually/create') }}" type="button" class="btn addStu text-light"><svg width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.75 12A7.25 7.25 0 0 1 12 4.75v0A7.25 7.25 0 0 1 19.25 12v0A7.25 7.25 0 0 1 12 19.25v0A7.25 7.25 0 0 1 4.75 12v0Z"></path>
                                <path d="M12 8.75v6.5"></path>
                                <path d="M15.25 12h-6.5"></path>
                            </svg>Add</a>
                        </div>
                        <button class="btn btn-success " id="btn_disable_scoring"><i class="fa fa-toggle-on"></i> Disable Scoring</button>
                        <button class="btn btn-warning " id="btn_enable_scoring"><i class="fa fa-toggle-off"></i> Enable Scoring</button>
                        <button type="button" class="btn refresh btn-light "> Only Retake Score</button>
                    </span>
                    <span class="float-end px-2">
                        <button class="btn btn-primary" id="course_assignment"><i class="fa fa-map-signs"></i> Course Assignment</button>
                        <button class="btn btn-warning" id="all_score_course_annual"><i class="fa fa-eye"></i> View Total Score </button>
                    </span>
                </div>
            </div>
           <div class="box_body pt-1 px-2">
                <div class="row">
                    <div class="col-md-7" style="min-height: 15px; " id="filter_panel">
                        <div class="row g-2 align-items-center mb-2">
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    @foreach ($optionAc as $years)
                                        <option value="{{ $years->id }}">{{ $years->name_kh }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Department</option>
                                    @foreach ($departments as $e)
                                        <option value="{{ $e->id}}">{{$e->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Semester</option>
                                    @foreach ($semestersOption as $s)
                                     <option value="{{$s->id}}">{{$s->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="">Degree</option>
                                    @foreach ($optionDegrees as $de)
                                        <option value="{{ $de->id }}">{{ $de->name_en }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Year</option>
                                    @foreach ($optionGrades as $gd)
                                        <option value="{{$gd->id}}">{{$gd->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Option</option><option value="1" class="dept_option dept_2">_Arch</option><option value="2" class="dept_option dept_2">_Civil</option><option value="3" class="dept_option dept_3">_EAT</option><option value="7" class="dept_option dept_6">g</option><option value="10" class="dept_option dept_1">_FST</option><option value="11" class="dept_option dept_1">_ChE</option><option value="5" class="dept_option dept_5">_Ind</option><option value="6" class="dept_option dept_5">_Mé</option><option value="4" class="dept_option dept_3">_EE</option><option value="8" class="dept_option dept_3">_EA</option><option value="9" class="dept_option dept_3">_ET</option><option value="12" class="dept_option dept_6">_WRI</option><option value="14" class="dept_option dept_2">Materials Science and Structures</option><option value="16" class="dept_option dept_6">WE</option><option value="17" class="dept_option dept_2">MS</option><option value="23" class="dept_option dept_18">MIT</option><option value="15" class="dept_option dept_1">Food Technology and Nutrition</option><option value="24" class="dept_option dept_18">FTN</option><option value="25" class="dept_option dept_18">MSS</option><option value="26" class="dept_option dept_18">WE</option><option value="27" class="dept_option dept_18">ETM</option><option value="22" class="dept_option dept_18">M-AIE</option><option value="21" class="dept_option dept_18">M-GIM</option><option value="20" class="dept_option dept_18">M-MT</option><option value="19" class="dept_option dept_18">M-WE</option><option value="18" class="dept_option dept_18">M-MS</option><option value="13" class="dept_option dept_6">_WEE</option><option value="38" class="dept_option dept_18">WAE</option><option value="49" class="dept_option dept_18">_MGCA</option><option value="46" class="dept_option dept_18">_MGCI</option><option value="47" class="dept_option dept_18">_MGEE</option><option value="45" class="dept_option dept_18">_MGIC</option><option value="50" class="dept_option dept_18">_MGIM</option><option value="48" class="dept_option dept_18">_MGRU</option><option value="51" class="dept_option dept_18">M-TE</option><option value="52" class="dept_option dept_18">M-WEE</option><option value="53" class="dept_option dept_18">M-AI</option><option value="54" class="dept_option dept_18">M-IM</option><option value="55" class="dept_option dept_18">M-ETM</option><option value="56" class="dept_option dept_5">ECAM</option><option value="57" class="dept_option dept_8">_AMS</option><option value="58" class="dept_option dept_8">_GTI</option><option value="59" class="dept_option dept_18">M-TIE</option><option value="60" class="dept_option dept_18">M-MSE</option><option value="61" class="dept_option dept_18">M-MIC</option><option value="63" class="dept_option dept_18">D-ETM</option><option value="64" class="dept_option dept_18">D-FTN</option><option value="65" class="dept_option dept_18">D-MIT</option><option value="66" class="dept_option dept_18">D-MSS</option><option value="67" class="dept_option dept_18">D-WAE</option><option value="68" class="dept_option dept_16">_ABE</option><option value="62" class="dept_option dept_18">M-ECS</option><option value="70" class="dept_option dept_22">_GTI</option><option value="71" class="dept_option dept_21">_GAR</option><option value="69" class="dept_option dept_19">ECAM_ROA</option><option value="28" class="dept_option dept_8">_GCA</option><option value="32" class="dept_option dept_8">_GGG</option><option value="35" class="dept_option dept_8">_GRU</option><option value="72" class="dept_option dept_5">ECAM_RA</option><option value="73" class="dept_option dept_5">ECAM_IESCM</option><option value="74" class="dept_option dept_19">ECAM_ISM</option><option value="75" class="dept_option dept_18">M-DAS</option><option value="76" class="dept_option dept_1">_TFS</option><option value="77" class="dept_option dept_2">_TCI</option><option value="79" class="dept_option dept_7">_TMG</option><option value="80" class="dept_option dept_5">_TIM</option><option value="81" class="dept_option dept_5">_TMT</option><option value="82" class="dept_option dept_3">_TMT</option><option value="84" class="dept_option dept_3">_TEA</option><option value="85" class="dept_option dept_6">_TWE</option><option value="83" class="dept_option dept_16">_TET</option><option value="30" class="dept_option dept_8">_GAR</option><option value="29" class="dept_option dept_8">_GCI</option><option value="31" class="dept_option dept_8">_GEE</option><option value="33" class="dept_option dept_8">_GIC</option><option value="34" class="dept_option dept_8">_GIM</option><option value="36" class="dept_option dept_8">_GTR</option>
                                </select>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h4 class="text-center">Course Sessions</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <select id="filter_lecturer" name="lecturer" style="margin-top: 10px;" tabindex="-1">
                            <option value="" selected></option>
                            @foreach ($employees as $em)
                                <option value="{{$em->id}}">{{$em->name_latin}} | {{$em->name_kh}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 pt-3 shadow-none">
                        <table id="example" class="table  table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Lecturer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody id="myTable">
                                    <tr  class="bordered-row">
                                        <td>
                                            <div class="row">
                                                <div class="col-7">
                                                    <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Advanced Computer Architecture <br></span>
                                                    <span>(C=16 | TD=20 | TP= 12)</span>
                                                </div>
                                                <div class="col-5">
                                                    I3GCA <br> AB
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                </div>
                                            </div>
                                        </td>

                                        <td>CHUN Thavorac</td>
                                        <td>

                                            <a href="" class="btn p-0 border-0 mt-2 mx-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="input score">
                                                <label class="switch" id="switch">
                                                    <input type="checkbox" class="warning">
                                                    <span class="slider round"></span>
                                                </label>
                                            </a>

                                            <a href="{{route('inputScore')}}" class="btn p-0 border-0 mt-1 mx-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="input score">
                                                <svg width="26" height="26" fill="#002aff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 3H4c-1.11 0-1.99.89-1.99 2L2 17c0 1.11.89 2 2 2h5v-2H4v-6h18V5c0-1.11-.89-2-2-2Zm0 4H4V5h16v2Zm-5.07 11.17-2.83-2.83-1.41 1.41L14.93 21 22 13.93l-1.41-1.41-5.66 5.65Z"></path>
                                                </svg>
                                            </a>

                                            <a href="{{route('CourseAnnually/edit')}}" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg width="22" height="22" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>
                                            <button type="button" class="btn p-0 px-2 border-0" data-bs-toggle="modal" data-bs-target="#delete_course">
                                                <svg width="22" height="22" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 6h18"></path>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <path d="M10 11v6"></path>
                                                    <path d="M14 11v6"></path>
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="delete_course" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="btnClose d-flex flex-row-reverse">
                                                            <button type="button" class="btn-close shadow-none p-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-header border-0 p-0 m-0 d-flex justify-content-center">
                                                            <div class="modal-title" id="exampleModalLabel" >
                                                                <p class="p p-0 m-0 fw-bolder">Are you sure you want to delete?</p>
                                                                <div class="d-flex justify-content-center">
                                                                    <img src="{{asset('image/system-outline-56-warning.gif')}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-center fs-3">Delete the course!</p>
                                                            <p class="text-center">You will not be able to recover it</p>
                                                        </div>
                                                        <div class="modal-footer border-0 d-flex justify-content-center">
                                                            <button type="button" style="width: 110px; background-color:#FF8C00;" onmouseover="this.style.backgroundColor='#F88017';" onmouseout="this.style.backgroundColor='#FF8C00';" class="btn py-1 btn-secondary border-0" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="button" style="width: 110px" class="btn py-1 btn-primary border-0">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row">
                                        <td>
                                            <div class="row">
                                                <div class="col-7">
                                                    <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Advanced Computer Architecture <br></span>
                                                    <span>(C=16 | TD=20 | TP= 12)</span>
                                                </div>
                                                <div class="col-5">
                                                    I3GCA <br> AB
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                </div>
                                            </div>
                                        </td>

                                        <td>CHUN Thavorac</td>
                                        <td>

                                            <a href="" class="btn p-0 border-0 mt-2 mx-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="input score">
                                                <label class="switch" id="switch">
                                                    <input type="checkbox" class="warning">
                                                    <span class="slider round"></span>
                                                </label>
                                            </a>

                                            <a href="" class="btn p-0 border-0 mt-1 mx-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="input score">
                                                <svg width="26" height="26" fill="#002aff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 3H4c-1.11 0-1.99.89-1.99 2L2 17c0 1.11.89 2 2 2h5v-2H4v-6h18V5c0-1.11-.89-2-2-2Zm0 4H4V5h16v2Zm-5.07 11.17-2.83-2.83-1.41 1.41L14.93 21 22 13.93l-1.41-1.41-5.66 5.65Z"></path>
                                                </svg>
                                            </a>

                                            <a href="" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <svg width="22" height="22" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>

                                            <button class="btn p-0 border-0 mx-2" type="button"  data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <svg width="22" height="22" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 6h18"></path>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <path d="M10 11v6"></path>
                                                    <path d="M14 11v6"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                        </table>
                    </div>
                    <div class="col-md-5">
                        <div class="course_session_message col-sm-12 box-body with-border text-muted well well-sm no-shadow mt-2" style="padding: 20px; min-height: 50px; background-color:#cac5c5;" id="message">
                            <center><h4>Please select any course on the left.</h4></center>
                        </div>
                        <div class="course_session_wrapper">
                            <button class="btn btn-sm hidden" style=" margin-top:7px; background-color: rgb(206, 206, 206); color:black;" id="toggleForm">Add Course Session</button>
                            <div class="col-sm-12 p-3 no-shadow mt-2 hidden" style=" min-height: 60px; background-color: rgb(235, 235, 235);" id="courseForm">
                                <div class="form_add_session" >
                                    <div class="row">
                                        <div class="col-2" style="padding-left:3px; padding-right: 3px;">
                                            <div class="form-group">
                                                <label for="session_time_course" class="fw-bold">Course</label>
                                                <input type="number" name="time_course" min="0" max="16" value="16" class="form-control shadow-none form-control-sm" id="session_time_course">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="session_time_td" class="fw-bold">TD</label>
                                                <input type="number" name="time_td" id="" class="form-control shadow-none form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="session_time_tp" class="fw-bold">TP</label>
                                                <input type="number" name="time_tp" min="0" max="32" value="" id="session_time_tp" class="form-control shadow-none form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="select_lecturer" class="fw-bold">Lecturer</label>
                                                <select name="" id="select_lecturer" class="form-select form-select-sm form-comtrol shadow-none" style="width: 100%;">
                                                    <option value=""></option>
                                                    <option value="1">Ava</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="" >
                                        <div class="col-md-8 mt-3" style="padding-left:3px; padding-right: 3px;">
                                            <div class="form_group">
                                                <label for="groups" class="fw-bold">Group</label>
                                                <label for="group" class="fw-bold">
                                                    <input type="checkbox" class="each-check-box" name="" id="" value=""> A
                                                </label>
                                                <label for="group" class="fw-bold">
                                                    <input type="checkbox" class="each-check-box" name="" id="" value=""> B
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <button type="reset" class="btn pull-right p-0 px-1 mx-1 rounded-1" style="background-color: #FF4500">Cancel</button>
                                            <button type="submit" class="btn pull-right p-0 px-1 mx-2 rounded-1" style="background-color:#1E90FF">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="todo-list ui-sortable mt-2 hidden" style="background-color: #e7fcf8; list-style: none;" id="new_course">
                                <li>
                                    <span class="handle ui-sortable-handle" style="padding-left: 20px;">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    <span class="text">គីមីរូប</span>
                                    <br>
                                    <span style="margin-left: 28px;">(C=16 | TD=20 | TP=12)</span>
                                    <small class="label label-danger" style="background-color: red; color:white; border-radius:2px ;padding:0px 2px;"><i class="fa fa-user"></i> Na</small>
                                    <div class="tools float-end mx-2">
                                        <svg width="17" height="17" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <path d="M10 11v6"></path>
                                            <path d="M14 11v6"></path>
                                        </svg>
                                    </div>
                                    <br>
                                    <span style="margin-left: 28px;">Groups:</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</body>
</html>
@endsection
