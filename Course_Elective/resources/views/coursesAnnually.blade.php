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

    <!-- Include Select2 CSS -->
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

   <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                                    <option value="">2022-2023</option>
                                    {{-- @foreach ($optionAc as $years)
                                        <option value="{{ $years->id }}">{{ $years->name_kh }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Department</option><option value="22">GTI</option><option value="21">GAR</option><option value="20">AMS</option><option value="19">IME</option><option value="18">GS</option><option value="17">OAC</option><option value="16">GTR</option><option value="13">SF</option><option value="12">SA</option><option value="8">TC</option><option value="7">GGG</option><option value="6">GRU</option><option value="5">GIM</option><option value="4">GIC</option><option value="3">GEE</option><option value="2">GCI</option><option value="1">GCA</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Semester</option><option value="1">semester 1</option><option value="2">emester 2</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="">Degree</option>
                                    <option value="">Engineer</option>
                                    <option value="">Associcate</option>
                                    <option value="">Master</option>
                                    <option value="">Bachelor</option>
                                    <option value="">International</option>
                                    {{-- @foreach ($optionDegrees as $op)
                                        <option value="{{ $op->id }}">{{ $op->name_kh }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Year</option><option value="1">First Year</option><option value="2">Second Year</option><option value="3">Third Years</option><option value="4">Fourth Year</option><option value="5">Fifth Year</option>
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
                            <option value="" selected=""></option>
                            <option value="190">CHOU Chandary | ជូ ច័ន្ទដារី</option>
                            <option value="378">CHOUM Tival | ជុំ ទីវ៉ាល់</option>
                            <option value="275">CHUM Pharino | ជុំ ផារីណូ</option>
                            <option value="357">HENG Sokchhay | ហេង&nbsp;សុខឆាយ</option>
                            <option value="356">HANG Leakhéna | ហង្ស លក្ខិណា</option>
                            <option value="299">KRY Nallis | គ្រី ណាល់លីស</option>
                            <option value="366">OU Sothea | អ៊ូ សុធា</option>
                            <option value="355">DOUNG Ratha | ដួង រដ្ធា</option>
                            <option value="476">PAK Sothy | ប៉ាក់ សុធី</option>
                            <option value="353">CHOU Soklin | ជូ&nbsp;សុខលីន</option>
                            <option value="645">CHHAN Malin | CHHAN Malin</option>
                            <option value="317">CHUN Thavorac | ជុន​ ថាវរៈ</option>
                            <option value="674">UN Kenratanak | អ៊ុន⁣⁣ កេនរតនះ</option>
                            <option value="452">SIM Boly | ស៊ីម បូលី</option>
                            <option value="586">CHEA Sophea | ជា សុភា</option>
                            <option value="624">KHAN Ponnara | ខាន់ ប៉ុណ្ណារ៉ា</option>
                            <option value="647">JEONG Chul | JEONG Chul</option>
                            <option value="660">RATH THAVYMONY Annanda | RATH THAVYMONY Annanda</option>
                            <option value="635">SEAK Leng | សៀក ឡេង</option>
                            <option value="721">Khin Seanghak | ឃីន ស៊ាងហាក់</option>
                            <option value="926">Vey Soriya | Vey Soriya</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 pt-3 shadow-none">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Lecturer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
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
                                                <label class="switch ">
                                                    <input type="checkbox" class="warning">
                                                    <span class="slider round"></span>
                                                </label>
                                            </a>

                                            <a href="{{route('inputScore')}}" class="btn p-0 border-0 mt-1 mx-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="input score">
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
                                                <label class="switch ">
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
                                                <input type="hidden" name="course_annual_id" value="">
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
                                                    <option value="2">Liam</option>
                                                    <option value="3">Noah</option>
                                                    <option value="4">Olivia</option>
                                                    <option value="5">Ava</option>
                                                    <option value="6">Jackson</option>
                                                    <option value="7">Emma</option>
                                                    <option value="8">Isabella</option>
                                                    <option value="9">Lucas</option>
                                                    <option value="10">Isabella</option>
                                                    <option value="11">Aiden</option>
                                                    <option value="12">Mia</option>
                                                    <option value="13">Oliver</option>
                                                    <option value="14">Amelia</option>
                                                    <option value="15">Ethan</option>
                                                    <option value="16">Harper</option>
                                                    <option value="17">Caden</option>
                                                    <option value="18">Evelyn</option>
                                                    <option value="19">Abigail</option>
                                                    <option value="20">Mason</option>
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
                                            <button type="button" class="btn pull-right p-0 px-2 mx-2 rounded-1" style="background-color: #FF4500">Cancel</button>
                                            <button type="button" class="btn pull-right p-0 px-2 mx-2 rounded-1" style="background-color:#1E90FF">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="todo-list ui-sortable mt-2" style="background-color: #e7fcf8; list-style: none;">
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
