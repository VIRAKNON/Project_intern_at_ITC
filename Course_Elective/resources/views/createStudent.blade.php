@extends('layout.app')
@section('createStudent')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/createStudent.css')}}">
    <script src="{{asset("js/createStudent.js")}}"></script>
    <title>Document</title>
</head>
<body>
    {{-- header content --}}
    <div class="container-fluid bg-light">
        <header class="py-2">
            <span class="fs-3">Students</span>
            <span class="px-3 ">Register new student</span>
        </header>

        <div class="content">
            <div class="p-2 px-3 lead">
                <span>Register new student</span>
            </div>
            <hr>

            <div class="barTabs p-2">
                <!--general info Nav tabs content-->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#GeneralInfo">General Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#newAcInfo">New Academic Information <span class="text-danger">*</span>
                        </a>
                    </li>
                </ul>

                <!--general info Tab panes content-->
                <div class="tab-content">
                    <div id="GeneralInfo" class="tab-pane active"><br>

                        <span class="fs-5">
                            <svg width="25" height="25" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13v2"></path>
                                <path fill="#ff0000" stroke="none" d="M12 8a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                                <path d="M12 4.75a7.25 7.25 0 1 0 0 14.5 7.25 7.25 0 1 0 0-14.5z"></path>
                            </svg>Basic Information
                        </span>

                        <hr color="gray" class="m-2">

                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center ">
                                <div class="uploadProfile">
                                    <div class="header">
                                        <label for="file" class="text-center">
                                            <img src="{{asset("image/nonProfile.jpg")}}" alt="nonprofile">

                                        <p>Browse File to upload!</p>
                                    </label>
                                    </div>

                                    <label for="file" class="footer">
                                        <span>
                                            <svg width="30" height="30" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.25 19.25h-3.5a2 2 0 0 1-2-2V6.75a2 2 0 0 1 2-2H14L18.25 9v2.25"></path>
                                                <path d="M17 14.75v4.5"></path>
                                                <path d="M19.25 17h-4.5"></path>
                                                <path d="M18 9.25h-4.25V5"></path>
                                            </svg>
                                        </span>
                                        <span class="text-dark">Not selected file</span>
                                        <span>
                                            <svg width="30" height="30" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m6.75 7.75.841 9.673a2 2 0 0 0 1.993 1.827h4.832a2 2 0 0 0 1.993-1.827l.841-9.673"></path>
                                                <path d="M9.75 7.5v-.75a2 2 0 0 1 2-2h.5a2 2 0 0 1 2 2v.75"></path>
                                                <path d="M5 7.75h14"></path>
                                            </svg>
                                        </span>

                                    </label>
                                    <input id="file" type="file">
                                </div>
                            </div>

                            {{-- input form --}}
                            <div class="col-8 py-3 ">
                                <form class="w-75 form">

                                    <div class="row mb-3">
                                        <label for="idCard" class="col-sm-2 text-end col-form-label fw-bolder">ID Card</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control shadow-none form-control-sm " id="idCard" disabled placeholder="ID Card (Auto generate)">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="enableID" class="col-sm-2 text-end col-form-label"></label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" class="checkbox" id="enableID"> <span>Enable ID Card</span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="nameKh" class="col-sm-2 col-form-label text-end fw-bolder">Name KH <strong>*</strong></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control shadow-none form-control-sm" id="nameKh" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nameLatin" class="col-sm-2 col-form-label text-end fw-bolder">Name Latin <strong>*</strong></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control shadow-none form-control-sm" id="nameLatin" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="gender" class="col-sm-2 col-form-label text-end fw-bolder">Gender <strong>*</strong></label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select-sm form-comtrol shadow-none" id="gender" required>
                                                <option selected>Choose your gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="dob" class="col-sm-2 col-form-label text-end fw-bolder">Date of Birth <strong>*</strong></label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control shadow-none form-control-sm" id="dob" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pob" class="col-sm-2 col-form-label text-end fw-bolder">Place of Birth</label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select-sm form-comtrol shadow-none" name="pob">
                                                <option value="2">បាត់ដំបង</option>
                                                <option value="3">កំពង់ចាម</option>
                                                <option value="4">កំពង់ឆ្នាំង</option>
                                                <option value="5">កំពង់ស្ពឺ</option>
                                                <option value="6">កំពង់ធំ</option>
                                                <option value="7">កំពត</option>
                                                <option value="8">កណ្តាល</option>
                                                <option value="9">កោះកុង</option>
                                                <option value="10">ក្រចេះ</option>
                                                <option value="11">មណ្ឌលគីរី</option>
                                                <option value="12">ភ្នំពេញ</option>
                                                <option value="13">ព្រះវិហារ</option>
                                                <option value="14">ព្រៃវែង</option>
                                                <option value="15">ពោធិ៍សាត់</option>
                                                <option value="16">រតនគីរី</option>
                                                <option value="17">សៀមរាប</option>
                                                <option value="18">ព្រះសីហនុ</option>
                                                <option value="19">ស្ទឹងត្រែង</option>
                                                <option value="20">ស្វាយរៀង</option>
                                                <option value="21">តាកែវ</option>
                                                <option value="22">កែប</option>
                                                <option value="23">បៃលិន</option>
                                                <option value="25">ត្បូងឃ្មុំ</option>
                                                <option value="26">ក្រសួងអប់រំយុវជន និង កីឡា</option>
                                                <option value="27">កម្ពុជាក្រោម</option>
                                                <option value="31">ខាវអ៊ីដាង</option>
                                                <option value="32">ព្រះត្រពាំង</option>
                                                <option value="33">សូរិន្ទ</option>
                                                <option value="34">ជាយដែនកម្ពុជា-ថៃ</option>
                                                <option value="35">ដងរែក</option>
                                                <option value="36">តាទុំ</option>
                                                <option value="37">ណងច័ន្ទ</option>
                                                <option value="38">ណងឯក</option>
                                                <option value="39">បាំងភូ</option>
                                                <option value="40">ឈុនបូរី</option>
                                                <option value="41">ភ្នំម៉ាឡៃ</option>
                                                <option value="42">ភ្នំឆ័ត្រ</option>
                                                <option value="43">សន្តិសុខ</option>
                                                <option value="44">សម្តេចឪ</option>
                                                <option value="45">សាយធូ</option>
                                                <option value="46">សាយប៊ី</option>
                                                <option value="47">សាយអេក</option>
                                                <option value="48">សុខសាន្ត</option>
                                                <option value="49">អំពិល</option>
                                                <option value="50">ឫទ្ធិសែន</option>
                                                <option value="51">ទី៧</option>
                                                <option value="52">ទី៨</option>
                                                <option value="53">ចិន</option>
                                                <option value="54">ថៃ</option>
                                                <option value="55">អាឡឺម៉ង់</option>
                                                <option value="56"></option>
                                                <option value="57">វៀតណាម</option>
                                                <option value="58">រុស្សី</option>
                                                <option value="59">កូរ៉េខាងត្បូង</option>
                                                <option value="60">អាមេរិក</option>
                                                <option value="61">អេហ្ស៊ីប</option>
                                                <option value="62">អូស្ត្រាលី</option>
                                                <option value="63">កាណាដា</option>
                                                <option value="64">ញូវហ៊្សេឡង់</option>
                                                <option value="65">អង់គ្លេស</option>
                                                <option value="66">ជប៉ុន</option>
                                                <option value="67">បារាំង</option>
                                                <option value="69">ឡាវ</option>
                                                <option value="70">ហុងកុង</option>
                                                <option value="71">តៃវ៉ាន់</option>
                                                <option value="72">អ៊ុយក្រែន</option>
                                                <option value="73">ឥណ្ឌា</option>
                                                <option value="85">ផ្សេងៗ( ក្រៅប្រទេស)</option>
                                                <option value="86">វិទ្យាស្ថានបច្ចេកវិទ្យាកម្ពុជា</option>
                                                <option value="1">ប.មានជ័យ</option>
                                                <option value="24">ឧ.មានជ័យ</option><option value="87">វិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈ</option>
                                                <option value="88">វិទ្យាស្ថានជាតិបណ្តុះបណ្តាលបច្ចេកទេស</option>
                                                <option value="89">សាលាមធ្យមសិក្សាបច្ចេកទេស JVC</option>
                                                <option value="90">សាកលវិទ្យាល័យភូមិន្ទកសិកម្ម</option>
                                                <option value="91">សាកលវិទ្យាល័យភូមិន្ទវិចិត្រសិល្បៈ</option>
                                                <option value="92">មជ្ឈមណ្ឌលបណ្តុះបណ្តាលវិជ្ជាជីវៈខេត្តព្រះសីហនុ</option>
                                                <option value="93">វិទ្យាស្ថានពហុបច្ចេកទេសភូមិភាគតេជោសែនស្វាយរៀង</option>
                                                <option value="94">សាកលវិទ្យាល័យន័រតុន</option>
                                                <option value="95">វិទ្យាស្ថានបច្ចេកវិទ្យាភ្នំពេញ</option>
                                                <option value="96">សាធារណៈប្រជាមានិតចិន</option>
                                                <option value="97">សាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ</option>
                                                <option value="98">សាកលវិទ្យាល័យអន្តរជាតិ</option>
                                                <option value="99">មីយ៉ាន់ម៉ា</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="redie" class="col-sm-2 text-end col-form-label fw-bolder">Radie</label>
                                        <div class="col-sm-10 d-flex align-item-center">
                                            <input type="checkbox" class="checkbox" id="redie">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="observation" class="col-sm-2 text-end col-form-label fw-bolder">Observation</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control shadow-none" cols="30" rows="10" id="observation"></textarea>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>

                        <span class="fs-5">
                            <svg width="25" height="25" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.75 6.75a2 2 0 0 1 2-2h10.5a2 2 0 0 1 2 2v7.5a2 2 0 0 1-2 2h-2.625l-2.625 3-2.625-3H6.75a2 2 0 0 1-2-2v-7.5Z"></path>
                                <path d="M12 8v2"></path>
                                <path d="M12.5 13a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"></path>
                            </svg>More Information
                        </span>

                        <hr color="gray" class="m-3">

                        <div class="barTabs p-2">
                            <!--More info Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#cinfo">Contact Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pinfo
                                    ">Parent Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#hsinfo">High School Information</a>
                                </li>
                            </ul>

                            <!--More info Tab panes -->
                            <div class="tab-content">

                                {{-- contact info --}}
                                <div id="cinfo" class="tab-pane active"><br>

                                    <div class="container">
                                        <form class="w-100">

                                            <div class="row mb-3">
                                                <label for="origin" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Origin <sup>*</sup></label>
                                                <div class="col-sm-10">
                                                    <select class="form-select form-select-sm form-comtrol shadow-none" name="origin" id="origin" required>
                                                        <option value="2">បាត់ដំបង</option>
                                                        <option value="3">កំពង់ចាម</option>
                                                        <option value="4">កំពង់ឆ្នាំង</option>
                                                        <option value="5">កំពង់ស្ពឺ</option>
                                                        <option value="6">កំពង់ធំ</option>
                                                        <option value="7">កំពត</option>
                                                        <option value="8">កណ្តាល</option>
                                                        <option value="9">កោះកុង</option>
                                                        <option value="10">ក្រចេះ</option>
                                                        <option value="11">មណ្ឌលគីរី</option>
                                                        <option value="12">ភ្នំពេញ</option>
                                                        <option value="13">ព្រះវិហារ</option>
                                                        <option value="14">ព្រៃវែង</option>
                                                        <option value="15">ពោធិ៍សាត់</option>
                                                        <option value="16">រតនគីរី</option>
                                                        <option value="17">សៀមរាប</option>
                                                        <option value="18">ព្រះសីហនុ</option>
                                                        <option value="19">ស្ទឹងត្រែង</option>
                                                        <option value="20">ស្វាយរៀង</option>
                                                        <option value="21">តាកែវ</option>
                                                        <option value="22">កែប</option>
                                                        <option value="23">បៃលិន</option>
                                                        <option value="25">ត្បូងឃ្មុំ</option>
                                                        <option value="26">ក្រសួងអប់រំយុវជន និង កីឡា</option>
                                                        <option value="27">កម្ពុជាក្រោម</option>
                                                        <option value="31">ខាវអ៊ីដាង</option>
                                                        <option value="32">ព្រះត្រពាំង</option>
                                                        <option value="33">សូរិន្ទ</option>
                                                        <option value="34">ជាយដែនកម្ពុជា-ថៃ</option>
                                                        <option value="35">ដងរែក</option>
                                                        <option value="36">តាទុំ</option>
                                                        <option value="37">ណងច័ន្ទ</option>
                                                        <option value="38">ណងឯក</option>
                                                        <option value="39">បាំងភូ</option>
                                                        <option value="40">ឈុនបូរី</option>
                                                        <option value="41">ភ្នំម៉ាឡៃ</option>
                                                        <option value="42">ភ្នំឆ័ត្រ</option>
                                                        <option value="43">សន្តិសុខ</option>
                                                        <option value="44">សម្តេចឪ</option>
                                                        <option value="45">សាយធូ</option>
                                                        <option value="46">សាយប៊ី</option>
                                                        <option value="47">សាយអេក</option>
                                                        <option value="48">សុខសាន្ត</option>
                                                        <option value="49">អំពិល</option>
                                                        <option value="50">ឫទ្ធិសែន</option>
                                                        <option value="51">ទី៧</option>
                                                        <option value="52">ទី៨</option>
                                                        <option value="53">ចិន</option>
                                                        <option value="54">ថៃ</option>
                                                        <option value="55">អាឡឺម៉ង់</option>
                                                        <option value="56"></option>
                                                        <option value="57">វៀតណាម</option>
                                                        <option value="58">រុស្សី</option>
                                                        <option value="59">កូរ៉េខាងត្បូង</option>
                                                        <option value="60">អាមេរិក</option>
                                                        <option value="61">អេហ្ស៊ីប</option>
                                                        <option value="62">អូស្ត្រាលី</option>
                                                        <option value="63">កាណាដា</option>
                                                        <option value="64">ញូវហ៊្សេឡង់</option>
                                                        <option value="65">អង់គ្លេស</option>
                                                        <option value="66">ជប៉ុន</option>
                                                        <option value="67">បារាំង</option>
                                                        <option value="69">ឡាវ</option>
                                                        <option value="70">ហុងកុង</option>
                                                        <option value="71">តៃវ៉ាន់</option>
                                                        <option value="72">អ៊ុយក្រែន</option>
                                                        <option value="73">ឥណ្ឌា</option>
                                                        <option value="85">ផ្សេងៗ( ក្រៅប្រទេស)</option>
                                                        <option value="86">វិទ្យាស្ថានបច្ចេកវិទ្យាកម្ពុជា</option>
                                                        <option value="1">ប.មានជ័យ</option>
                                                        <option value="24">ឧ.មានជ័យ</option><option value="87">វិទ្យាស្ថានពហុបច្ចេកទេសព្រះកុសុមៈ</option>
                                                        <option value="88">វិទ្យាស្ថានជាតិបណ្តុះបណ្តាលបច្ចេកទេស</option>
                                                        <option value="89">សាលាមធ្យមសិក្សាបច្ចេកទេស JVC</option>
                                                        <option value="90">សាកលវិទ្យាល័យភូមិន្ទកសិកម្ម</option>
                                                        <option value="91">សាកលវិទ្យាល័យភូមិន្ទវិចិត្រសិល្បៈ</option>
                                                        <option value="92">មជ្ឈមណ្ឌលបណ្តុះបណ្តាលវិជ្ជាជីវៈខេត្តព្រះសីហនុ</option>
                                                        <option value="93">វិទ្យាស្ថានពហុបច្ចេកទេសភូមិភាគតេជោសែនស្វាយរៀង</option>
                                                        <option value="94">សាកលវិទ្យាល័យន័រតុន</option>
                                                        <option value="95">វិទ្យាស្ថានបច្ចេកវិទ្យាភ្នំពេញ</option>
                                                        <option value="96">សាធារណៈប្រជាមានិតចិន</option>
                                                        <option value="97">សាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ</option>
                                                        <option value="98">សាកលវិទ្យាល័យអន្តរជាតិ</option>
                                                        <option value="99">មីយ៉ាន់ម៉ា</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="tel" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="tel" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-sm shadow-none" name="" id="email" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="currentAddress" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Current Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="currentAddress" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="perAddress" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Permanent Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="perAddress" required>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                                {{-- Parent Info --}}
                                <div id="pinfo" class="tab-pane fade"><br>
                                    <div class="container">

                                        <form class="w-100">

                                            <div class="row mb-3">
                                                <label for="parentName" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="parentName" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="parentOcc" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Occupation</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="parentOcc" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="parentAddress" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="parentAddress" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="parentTel" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="parentTel" required>
                                                </div>
                                            </div>

                                        </form>

                                    </div>

                                </div>

                                {{-- hight school info --}}
                                <div id="hsinfo" class="tab-pane fade"><br>
                                    <div class="container">
                                        <form class="w-100">

                                            <div class="row mb-3">
                                                <label for="hSchool" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">High School</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="hSchool" placeholder="High school name" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="mcsNo" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">MCS No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="mcsNo" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="canId" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Can ID</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="" id="canId" required>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container my-5 d-flex justify-content-center">

                            <a href="{{route('studentAnnuals.index')}}" type="button" class="custom-btn btn shadow-none mr-2"><span>Cancel</span></a>
                            <button class="btnCreate">
                                <span>Create</span>
                                <span>
                                    Sure ?
                                </span>
                                <span>
                                    Created !
                                    <svg id="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M8.00011 13L12.2278 16.3821C12.6557 16.7245 13.2794 16.6586 13.6264 16.2345L22.0001 6"></path> <path fill="#ffffff" d="M11.1892 12.2368L15.774 6.63327C16.1237 6.20582 16.0607 5.5758 15.6332 5.22607C15.2058 4.87635 14.5758 4.93935 14.226 5.36679L9.65273 10.9564L11.1892 12.2368ZM8.02292 16.1068L6.48641 14.8263L5.83309 15.6248L2.6 13.2C2.15817 12.8687 1.53137 12.9582 1.2 13.4C0.868627 13.8419 0.95817 14.4687 1.4 14.8L4.63309 17.2248C5.49047 17.8679 6.70234 17.7208 7.381 16.8913L8.02292 16.1068Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
                                </span>
                            </button>

                        </div>

                        {{-- Footer --}}
                        <div class="container-fluid p-0 m-0">
                            <hr class="py-2">
                            <span class="fw-bolder">Copyright © 2023 <a href="#" class="text-info px-2 text-decoration-none ">ITC / SMIS</a><span class="fw-normal">. All Right Reserved.</span></span>
                        </div>


                    </div>

                    {{-- New Academic Information content--}}

                    <div id="newAcInfo" class="tab-pane fade"><br>
                        <div class="container">
                            <form action="" class="w-100">

                                <div class="row mb-3">
                                    <label for="acaYear" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Academic Year <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="acaYear" required>
                                            <option value="2023">២០២២-២០២៣</option>
                                            <option value="2022">២០២១-២០២២</option>
                                            <option value="2021">២០២០-២០២១</option>
                                            <option value="2020">២០១៩ - ២០២០</option>
                                            <option value="2019">២០១៨ - ២០១៩</option>
                                            <option value="2018">២០១៧ - ២០១៨</option>
                                            <option value="2017">២០១៦-២០១៧</option>
                                            <option value="2016">២០១៥-២០១៦</option>
                                            <option value="2015">២០១៤-២០១៥</option>
                                            <option value="2014">២០១៣-២០១៤</option>
                                            <option value="2013">២០១២-២០១៣</option>
                                            <option value="2012">២០១១-២០១២</option>
                                            <option value="2011">២០១០-២០១១</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="promotion" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Promotion <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="promotion" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="degree" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Degree <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="degree" required>
                                            <option value="1">វិស្វករ</option>
                                            <option value="2">បរិញាប័ត្ររងវិស្វកម្ម</option>
                                            <option value="5">ប​ណ្ឌិត​</option>
                                            <option value="4">បរិញាប័ត្រជាន់ខ្ពស់</option>
                                            <option value="3">បរិញាប័ត្រ</option>
                                            <option value="6">អន្តរជាតិ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="grade" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Grade <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="grade" required>
                                            <option value="1">ឆ្នាំទី១</option>
                                            <option value="2">ឆ្នាំទី២</option>
                                            <option value="3">ឆ្នាំទី៣</option>
                                            <option value="4">ឆ្នាំទី៤</option>
                                            <option value="5">ឆ្នាំទី៥</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="department" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Department <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="department" required>
                                            <option value="22">GTI</option>
                                            <option value="21">GAR</option>
                                            <option value="20">AMS</option>
                                            <option value="19">IME</option>
                                            <option value="18">GS</option>
                                            <option value="17">OAC</option>
                                            <option value="16">GTR</option>
                                            <option value="13">SF</option>
                                            <option value="12">SA</option>
                                            <option value="8">TC</option>
                                            <option value="7">GGG</option>
                                            <option value="6">GRU</option>
                                            <option value="5">GIM</option>
                                            <option value="4">GIC</option>
                                            <option value="3">GEE</option>
                                            <option value="2">GCI</option>
                                            <option value="1">GCA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="option" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Option</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="option">
                                            <option selected="selected" value=""></option>
                                            <option value="1">_Arch</option>
                                            <option value="2">_Civil</option>
                                            <option value="3">_EAT</option>
                                            <option value="7">g</option>
                                            <option value="10">_FST</option>
                                            <option value="11">_ChE</option>
                                            <option value="5">_Ind</option>
                                            <option value="6">_Mé</option>
                                            <option value="4">_EE</option>
                                            <option value="8">_EA</option>
                                            <option value="9">_ET</option>
                                            <option value="12">_WRI</option>
                                            <option value="14">Materials Science and Structures</option>
                                            <option value="16">WE</option>
                                            <option value="17">MS</option>
                                            <option value="23">MIT</option>
                                            <option value="15">Food Technology and Nutrition</option>
                                            <option value="24">FTN</option>
                                            <option value="25">MSS</option>
                                            <option value="26">WE</option>
                                            <option value="27">ETM</option>
                                            <option value="22">M-AIE</option>
                                            <option value="21">M-GIM</option>
                                            <option value="20">M-MT</option>
                                            <option value="19">M-WE</option>
                                            <option value="18">M-MS</option>
                                            <option value="13">_WEE</option>
                                            <option value="38">WAE</option>
                                            <option value="49">_MGCA</option>
                                            <option value="46">_MGCI</option>
                                            <option value="47">_MGEE</option>
                                            <option value="45">_MGIC</option>
                                            <option value="50">_MGIM</option>
                                            <option value="48">_MGRU</option>
                                            <option value="51">M-TE</option>
                                            <option value="52">M-WEE</option>
                                            <option value="53">M-AI</option>
                                            <option value="54">M-IM</option>
                                            <option value="55">M-ETM</option>
                                            <option value="56">ECAM</option>
                                            <option value="57">_AMS</option>
                                            <option value="58">_GTI</option>
                                            <option value="59">M-TIE</option>
                                            <option value="60">M-MSE</option>
                                            <option value="61">M-MIC</option>
                                            <option value="63">D-ETM</option>
                                            <option value="64">D-FTN</option>
                                            <option value="65">D-MIT</option>
                                            <option value="66">D-MSS</option>
                                            <option value="67">D-WAE</option>
                                            <option value="68">_ABE</option>
                                            <option value="62">M-ECS</option>
                                            <option value="70">_GTI</option>
                                            <option value="71">_GAR</option>
                                            <option value="69">ECAM_ROA</option>
                                            <option value="28">_GCA</option>
                                            <option value="32">_GGG</option>
                                            <option value="35">_GRU</option>
                                            <option value="72">ECAM_RA</option>
                                            <option value="73">ECAM_IESCM</option>
                                            <option value="74">ECAM_ISM</option>
                                            <option value="75">M-DAS</option>
                                            <option value="76">_TFS</option>
                                            <option value="77">_TCI</option>
                                            <option value="79">_TMG</option>
                                            <option value="80">_TIM</option>
                                            <option value="81">_TMT</option>
                                            <option value="82">_TMT</option>
                                            <option value="84">_TEA</option>
                                            <option value="85">_TWE</option>
                                            <option value="83">_TET</option>
                                            <option value="30">_GAR</option>
                                            <option value="29">_GCI</option>
                                            <option value="31">_GEE</option>
                                            <option value="33">_GIC</option>
                                            <option value="34">_GIM</option>
                                            <option value="36">_GTR</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="group" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Group</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="group">
                                            <option value="30">1</option>
                                            <option value="11">2</option>
                                            <option value="29">3</option>
                                            <option value="17">4</option>
                                            <option value="27">5</option>
                                            <option value="18">6</option>
                                            <option value="31">7</option>
                                            <option value="7">8</option>
                                            <option value="8">9</option>
                                            <option value="20">10</option>
                                            <option value="19">11</option>
                                            <option value="21">12</option>
                                            <option value="23">13</option>
                                            <option value="32">14</option>
                                            <option value="33">15</option>
                                            <option value="13">16</option>
                                            <option value="12">17</option>
                                            <option value="9">18</option>
                                            <option value="16">19</option>
                                            <option value="35">20</option>
                                            <option value="10">21</option>
                                            <option value="36">22</option>
                                            <option value="22">23</option>
                                            <option value="14">24</option>
                                            <option value="15">25</option>
                                            <option value="26">26</option>
                                            <option value="24">27</option>
                                            <option value="25">28</option>
                                            <option value="28">29</option>
                                            <option value="34">30</option>
                                            <option value="60">31</option>
                                            <option value="61">32</option>
                                            <option value="62">33</option>
                                            <option value="59">34</option>
                                            <option value="63">35</option>
                                            <option value="64">36</option>
                                            <option value="65">37</option>
                                            <option value="66">38</option>
                                            <option value="67">39</option>
                                            <option value="68">40</option>
                                            <option value="69">41</option>
                                            <option value="70">42</option>
                                            <option value="71">43</option>
                                            <option value="72">44</option>
                                            <option value="73">45</option>
                                            <option value="74">46</option>
                                            <option value="79">47</option>
                                            <option value="80">48</option>
                                            <option value="81">49</option>
                                            <option value="82">50</option>
                                            <option value="83">51</option>
                                            <option value="84">52</option>
                                            <option value="85">53</option>
                                            <option value="86">54</option>
                                            <option value="87">55</option>
                                            <option value="88">56</option>
                                            <option value="89">57</option>
                                            <option value="90">58</option>
                                            <option value="91">59</option>
                                            <option value="92">60</option>
                                            <option value="93">61</option>
                                            <option value="94">62</option>
                                            <option value="95">63</option>
                                            <option value="96">64</option>
                                            <option value="97">65</option>
                                            <option value="98">66</option>
                                            <option value="99">67</option>
                                            <option value="100">68</option>
                                            <option value="101">69</option>
                                            <option value="102">70</option>
                                            <option value="103">71</option>
                                            <option value="104">72</option>
                                            <option value="105">73</option>
                                            <option value="106">74</option>
                                            <option value="107">75</option>
                                            <option value="108">76</option>
                                            <option value="109">77</option>
                                            <option value="110">78</option>
                                            <option value="111">79</option>
                                            <option value="112">80</option>
                                            <option value="113">81</option>
                                            <option value="114">82</option>
                                            <option value="115">83</option>
                                            <option value="116">84</option>
                                            <option value="117">85</option>
                                            <option value="118">86</option>
                                            <option value="119">87</option>
                                            <option value="120">88</option>
                                            <option value="121">89</option>
                                            <option value="122">90</option>
                                            <option value="123">91</option>
                                            <option value="124">92</option>
                                            <option value="125">93</option>
                                            <option value="126">94</option>
                                            <option value="127">95</option>
                                            <option value="128">96</option>
                                            <option value="129">97</option>
                                            <option value="130">98</option>
                                            <option value="131">99</option>
                                            <option value="132">100</option>
                                            <option value="2">A</option>
                                            <option value="76">AA</option>
                                            <option value="75">AB</option>
                                            <option value="134">AC</option>
                                            <option value="135">AD</option>
                                            <option value="136">AE</option>
                                            <option value="137">AF</option>
                                            <option value="138">AG</option>
                                            <option value="1">B</option>
                                            <option value="4">C</option>
                                            <option value="3">D</option>
                                            <option value="37">E</option>
                                            <option value="38">F</option>
                                            <option value="39">G</option>
                                            <option value="40">H</option>
                                            <option value="41">I</option>
                                            <option value="42">J</option>
                                            <option value="43">K</option>
                                            <option value="44">L</option>
                                            <option value="45">M</option>
                                            <option value="46">N</option>
                                            <option value="133">N/A</option>
                                            <option value="47">O</option>
                                            <option value="48">P</option>
                                            <option value="49">Q</option>
                                            <option value="50">R</option>
                                            <option value="51">S</option>
                                            <option value="52">T</option>
                                            <option value="53">U</option>
                                            <option value="54">V</option>
                                            <option value="55">W</option>
                                            <option value="56">X</option>
                                            <option value="77">Y</option>
                                            <option value="78">Z</option>
                                            <option value="57">b</option>
                                            <option value="58">s</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="history" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">History</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="history">
                                            <option selected="selected" value=""></option>
                                            <option value="1">DUT+0</option>
                                            <option value="2">DUT+1</option>
                                            <option value="3">DUT+2</option>
                                            <option value="4">T1+0</option>
                                            <option value="5">T1+1</option>
                                            <option value="6">T1+2</option>
                                            <option value="7">T2+0</option>
                                            <option value="8">T2+1</option>
                                            <option value="9">T2+2</option>
                                            <option value="10">Ex. T1</option>
                                            <option value="11">Ex. T2</option>
                                            <option value="12">Ex. T3</option>
                                            <option value="13">Ex. T3+0</option>
                                            <option value="14">Laos</option>
                                            <option value="15">Vietnam</option>
                                            <option value="16">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">History</label>
                                    <div class="col-sm-3">
                                        <input type="checkbox" name="" id=""><span class="fw-semibold"> Red. I1</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" name="" id=""><span class="fw-semibold"> Red. I1</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" name="" id=""><span class="fw-semibold"> Red. I1</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
