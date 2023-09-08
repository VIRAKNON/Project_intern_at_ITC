@extends('layout.app')
@section('students')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        {{-- endCDN --}}
        <link rel="stylesheet" href="{{asset('css/studentAnnuals.css')}}">
        <link rel="stylesheet" href="{{asset('js/studentAnnuals.js')}}">
        <title>Student Annuals</title>
        <style>
            @import 'path/to/bootstrap-source/_reboot.scss';
            /* Override Bootstrap styles */
            ol, ul {
                padding-left:0;
            }
            .sidebar .nav_links li a.activeStudentAnnuals{
                background: #2C3E50;
                border-left: 4px solid #157DEC;
                color: #FFFFFF;
            }
            .sidebar .nav_links li a.activeStudentAnnuals i{
                color: #FFFFFF;
            }
            .sidebar .nav_links li a.activeStudentAnnuals span{
                color: #FFFFFF;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid bg-light vh-100">
            <div class="row bg-light mb-4" style="
                border-radius: 5px;
                background-color: #ffffff;
                box-shadow:  5px 5px 7px #d6d6d6;
            ">
                <header class="py-2">
                    <span class="fs-3">Students</span>
                    <span class="px-3">All existing students</span>
                </header>
            </div>
            <div class="contentStu p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="input-group">
                            <a href="{{ route('studentAnnuals/create') }}" type="button" class="btn btn-primary text-light">
                                <svg width="20" height="20" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2Zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2Z"></path>
                                </svg>
                                Add
                            </a>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split rounded-end-2" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            {{-- <button class="btn btn-warning text-light mx-2 rounded-start-2 rounded-end-2" type="button">
                                <svg width="20" height="20" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.02 12c0-5.51 4.47-9.98 9.98-9.98 5.51 0 9.98 4.47 9.98 9.98 0 5.51-4.47 9.98-9.98 9.98-5.51 0-9.98-4.47-9.98-9.98Zm9.46 1.74V20l4.87-9.74H13V4l-5 9.74h3.48Z" clip-rule="evenodd"></path>
                                </svg>
                                Update-Scholarship-Student
                            </button>
                            <button class="btn btn-warning text-light rounded-start-2 rounded-end-2" type="button">
                                Clone Semester II
                            </button>

                            <button class="btn btn-secondary text-light mx-2 rounded-start-2" type="button">
                                <svg width="20" height="20" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.645 6.35A7.958 7.958 0 0 0 11.995 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08a5.99 5.99 0 0 1-5.65 4c-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L12.995 11h7V4l-2.35 2.35Z"></path>
                                </svg>
                            </button> --}}

                        </div>

                    </div>
                    <div class="col-4">
                        {{-- <div class="btn-group float-end">
                            <div class="dropdown mx-2">
                                <button class="btn text-light dropdown-toggle" style="background-color: #FF5F1F" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-light" style="background-color: #5865F2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reporting
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropdown mx-2">
                                <button class="btn text-light dropdown-toggle" style="background-color: #056608" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Export data
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-9">
                        <div class="row g-2 align-items-center">
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="2023">២០២២-២០២៣</option><option value="2022">២០២១-២០២២</option><option value="2021">២០២០-២០២១</option><option value="2020">២០១៩ - ២០២០</option><option value="2019">២០១៨ - ២០១៩</option><option value="2018">២០១៧ - ២០១៨</option><option value="2017">២០១៦-២០១៧</option><option value="2016">២០១៥-២០១៦</option><option value="2015">២០១៤-២០១៥</option><option value="2014">២០១៣-២០១៤</option><option value="2013">២០១២-២០១៣</option><option value="2012">២០១១-២០១២</option><option value="2011">២០១០-២០១១</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Degree</option><option value="1">វិស្វករ</option><option value="2">បរិញាប័ត្ររងវិស្វកម្ម</option><option value="5">ប​ណ្ឌិត​</option><option value="4">បរិញាប័ត្រជាន់ខ្ពស់</option><option value="3">បរិញាប័ត្រ</option><option value="6">អន្តរជាតិ</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Grade</option><option value="1">ឆ្នាំទី១</option><option value="2">ឆ្នាំទី២</option><option value="3">ឆ្នាំទី៣</option><option value="4">ឆ្នាំទី៤</option><option value="5">ឆ្នាំទី៥</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Department</option><option value="22">GTI</option><option value="21">GAR</option><option value="20">AMS</option><option value="19">IME</option><option value="18">GS</option><option value="17">OAC</option><option value="16">GTR</option><option value="13">SF</option><option value="12">SA</option><option value="8">TC</option><option value="7">GGG</option><option value="6">GRU</option><option value="5">GIM</option><option value="4">GIC</option><option value="3">GEE</option><option value="2">GCI</option><option value="1">GCA</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    ><option selected="selected" value="">Gender</option><option value="1">ប្រុស</option><option value="2">ស្រី</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Option</option><option value="1" class="dept_option dept_2">_Arch</option><option value="2" class="dept_option dept_2">_Civil</option><option value="3" class="dept_option dept_3">_EAT</option><option value="7" class="dept_option dept_6">g</option><option value="10" class="dept_option dept_1">_FST</option><option value="11" class="dept_option dept_1">_ChE</option><option value="5" class="dept_option dept_5">_Ind</option><option value="6" class="dept_option dept_5">_Mé</option><option value="4" class="dept_option dept_3">_EE</option><option value="8" class="dept_option dept_3">_EA</option><option value="9" class="dept_option dept_3">_ET</option><option value="12" class="dept_option dept_6">_WRI</option><option value="14" class="dept_option dept_2">Materials Science and Structures</option><option value="16" class="dept_option dept_6">WE</option><option value="17" class="dept_option dept_2">MS</option><option value="23" class="dept_option dept_18">MIT</option><option value="15" class="dept_option dept_1">Food Technology and Nutrition</option><option value="24" class="dept_option dept_18">FTN</option><option value="25" class="dept_option dept_18">MSS</option><option value="26" class="dept_option dept_18">WE</option><option value="27" class="dept_option dept_18">ETM</option><option value="22" class="dept_option dept_18">M-AIE</option><option value="21" class="dept_option dept_18">M-GIM</option><option value="20" class="dept_option dept_18">M-MT</option><option value="19" class="dept_option dept_18">M-WE</option><option value="18" class="dept_option dept_18">M-MS</option><option value="13" class="dept_option dept_6">_WEE</option><option value="38" class="dept_option dept_18">WAE</option><option value="49" class="dept_option dept_18">_MGCA</option><option value="46" class="dept_option dept_18">_MGCI</option><option value="47" class="dept_option dept_18">_MGEE</option><option value="45" class="dept_option dept_18">_MGIC</option><option value="50" class="dept_option dept_18">_MGIM</option><option value="48" class="dept_option dept_18">_MGRU</option><option value="51" class="dept_option dept_18">M-TE</option><option value="52" class="dept_option dept_18">M-WEE</option><option value="53" class="dept_option dept_18">M-AI</option><option value="54" class="dept_option dept_18">M-IM</option><option value="55" class="dept_option dept_18">M-ETM</option><option value="56" class="dept_option dept_5">ECAM</option><option value="57" class="dept_option dept_8">_AMS</option><option value="58" class="dept_option dept_8">_GTI</option><option value="59" class="dept_option dept_18">M-TIE</option><option value="60" class="dept_option dept_18">M-MSE</option><option value="61" class="dept_option dept_18">M-MIC</option><option value="63" class="dept_option dept_18">D-ETM</option><option value="64" class="dept_option dept_18">D-FTN</option><option value="65" class="dept_option dept_18">D-MIT</option><option value="66" class="dept_option dept_18">D-MSS</option><option value="67" class="dept_option dept_18">D-WAE</option><option value="68" class="dept_option dept_16">_ABE</option><option value="62" class="dept_option dept_18">M-ECS</option><option value="70" class="dept_option dept_22">_GTI</option><option value="71" class="dept_option dept_21">_GAR</option><option value="69" class="dept_option dept_19">ECAM_ROA</option><option value="28" class="dept_option dept_8">_GCA</option><option value="32" class="dept_option dept_8">_GGG</option><option value="35" class="dept_option dept_8">_GRU</option><option value="72" class="dept_option dept_5">ECAM_RA</option><option value="73" class="dept_option dept_5">ECAM_IESCM</option><option value="74" class="dept_option dept_19">ECAM_ISM</option><option value="75" class="dept_option dept_18">M-DAS</option><option value="76" class="dept_option dept_1">_TFS</option><option value="77" class="dept_option dept_2">_TCI</option><option value="79" class="dept_option dept_7">_TMG</option><option value="80" class="dept_option dept_5">_TIM</option><option value="81" class="dept_option dept_5">_TMT</option><option value="82" class="dept_option dept_3">_TMT</option><option value="84" class="dept_option dept_3">_TEA</option><option value="85" class="dept_option dept_6">_TWE</option><option value="83" class="dept_option dept_16">_TET</option><option value="30" class="dept_option dept_8">_GAR</option><option value="29" class="dept_option dept_8">_GCI</option><option value="31" class="dept_option dept_8">_GEE</option><option value="33" class="dept_option dept_8">_GIC</option><option value="34" class="dept_option dept_8">_GIM</option><option value="36" class="dept_option dept_8">_GTR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="searchStu float-end mx-2">
                            <svg class="search_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" alt="search icon">
                                <path d="M46.599 46.599a4.498 4.498 0 0 1-6.363 0l-7.941-7.941C29.028 40.749 25.167 42 21 42 9.402 42 0 32.598 0 21S9.402 0 21 0s21 9.402 21 21c0 4.167-1.251 8.028-3.342 11.295l7.941 7.941a4.498 4.498 0 0 1 0 6.363zM21 6C12.717 6 6 12.714 6 21s6.717 15 15 15c8.286 0 15-6.714 15-15S29.286 6 21 6z">
                                </path>
                            </svg>
                            <input class="search_stu" id="inputBox" type="text" placeholder="Search Students">
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-9">
                        <div class="row g-2 align-items-center">
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="1">ឆមាសទី១</option><option value="2">ឆមាសទី២</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Origin</option><option value="2">បាត់ដំបង</option><option value="3">កំពង់ចាម</option><option value="4">កំពង់ឆ្នាំង</option><option value="5">កំពង់ស្ពឺ</option><option value="6">កំពង់ធំ</option><option value="7">កំពត</option><option value="8">កណ្តាល</option><option value="9">កោះកុង</option><option value="10">ក្រចេះ</option><option value="11">មណ្ឌលគីរី</option><option value="12">ភ្នំពេញ</option><option value="13">ព្រះវិហារ</option><option value="14">ព្រៃវែង</option><option value="15">ពោធិ៍សាត់</option><option value="16">រតនគីរី</option><option value="17">សៀមរាប</option><option value="18">ព្រះសីហនុ</option><option value="19">ស្ទឹងត្រែង</option><option value="20">ស្វាយរៀង</option><option value="21">តាកែវ</option><option value="22">កែប</option><option value="23">បៃលិន</option><option value="25">ត្បូងឃ្មុំ</option><option value="26">ក្រសួងអប់រំយុវជន និង កីឡា</option><option value="27">កម្ពុជាក្រោម</option><option value="31">ខាវអ៊ីដាង</option><option value="32">ព្រះត្រពាំង</option><option value="33">សូរិន្ទ</option><option value="34">ជាយដែនកម្ពុជា-ថៃ</option><option value="35">ដងរែក</option><option value="36">តាទុំ</option><option value="37">ណងច័ន្ទ</option><option value="38">ណងឯក</option><option value="39">បាំងភូ</option><option value="40">ឈុនបូរី</option><option value="41">ភ្នំម៉ាឡៃ</option><option value="42">ភ្នំឆ័ត្រ</option><option value="43">សន្តិសុខ</option><option value="44">សម្តេចឪ</option><option value="45">សាយធូ</option><option value="46">សាយប៊ី</option><option value="47">សាយអេក</option><option value="48">សុខសាន្ត</option><option value="49">អំពិល</option><option value="50">ឫទ្ធិសែន</option><option value="51">ទី៧</option><option value="52">ទី៨</option><option value="53">ចិន</option><option value="54">ថៃ</option><option value="55">អាឡឺម៉ង់</option><option value="56"></option><option value="57">វៀតណាម</option><option value="58">រុស្សី</option><option value="59">កូរ៉េខាងត្បូង</option><option value="60">អាមេរិក</option><option value="61">អេហ្ស៊ីប</option><option value="62">អូស្ត្រាលី</option><option value="63">កាណាដា</option><option value="64">ញូវហ៊្សេឡង់</option><option value="65">អង់គ្លេស</option><option value="66">ជប៉ុន</option><option value="67">បារាំង</option><option value="69">ឡាវ</option><option value="70">ហុងកុង</option><option value="71">តៃវ៉ាន់</option><option value="72">អ៊ុយក្រែន</option><option value="73">ឥណ្ឌា</option><option value="85">ផ្សេងៗ( ក្រៅប្រទេស)</option><option value="86">វិទ្យាស្ថានបច្ចេកវិទ្យាកម្ពុជា</option><option value="1">ប.មានជ័យ</option><option value="24">ឧ.មានជ័យ</option><option value="87">វិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈ</option><option value="88">វិទ្យាស្ថានជាតិបណ្តុះបណ្តាលបច្ចេកទេស</option><option value="89">សាលាមធ្យមសិក្សាបច្ចេកទេស JVC</option><option value="90">សាកលវិទ្យាល័យភូមិន្ទកសិកម្ម</option><option value="91">សាកលវិទ្យាល័យភូមិន្ទវិចិត្រសិល្បៈ</option><option value="92">មជ្ឈមណ្ឌលបណ្តុះបណ្តាលវិជ្ជាជីវៈខេត្តព្រះសីហនុ</option><option value="93">វិទ្យាស្ថានពហុបច្ចេកទេសភូមិភាគតេជោសែនស្វាយរៀង</option><option value="94">សាកលវិទ្យាល័យន័រតុន</option><option value="95">វិទ្យាស្ថានបច្ចេកវិទ្យាភ្នំពេញ</option><option value="96">សាធារណៈប្រជាមានិតចិន</option><option value="97">សាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ</option><option value="98">សាកលវិទ្យាល័យអន្តរជាតិ</option><option value="99">មីយ៉ាន់ម៉ា</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <input class="form-control shadow-none" type="text" name="" id="" placeholder="Group">
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="with">With radié</option><option value="no">No radié</option><option value="only">Only radié</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="with">With redouble</option><option value="no">No redouble</option><option value="only">Only redouble</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" class="mt-3">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Card</th>
                                <th>Name KH</th>
                                <th>Name Latin</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Class</th>
                                <th>Option</th>
                                <th>Group</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID Card</td>
                                <td>Name KH</td>
                                <td>Name Latin</td>
                                <td>Date of Birth</td>
                                <td>Gender</td>
                                <td>Class</td>
                                <td>Option</td>
                                <td>Group</td>
                                <td>
                                    <a href="{{route('studentAnnuals/edit')}}" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">

                                        <svg width="25" height="25" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
                                    <button class="btn p-0 px-2 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <svg width="25" height="25" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <path d="M10 11v6"></path>
                                            <path d="M14 11v6"></path>
                                        </svg>
                                    </button>
                                    <a href="{{ route('studentAnnuals/show') }}" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Detail">
                                        <svg width="30" height="30" fill="#00aaff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4ZM4 18c0-2.66 5.33-4 8-4s8 1.34 8 4v2H4v-2Z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
        <script>
            // Initialize tooltips on button CRUD
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        </script>
    </body>
    </html>
@endsection

