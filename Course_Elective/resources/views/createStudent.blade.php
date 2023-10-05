@extends('layout.app')
@section('createStudent')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/libraries/bootstrap@5.3.1_dist_css_bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/libraries/bootstrap@5.3.1_dist_js.bundle.min.js')}}"></script>
    <link href="{{asset('css/libraries/fonts.googleapis.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/libraries/bootstrap@4.6.2_dist.min.css')}}">
    <link href="{{asset('css/libraries/select2@4.1.0-rc.0_dist.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/libraries/jquery@3.6.4_dist_jquery.slim.min.js')}}"></script>
    <script src="{{asset('js/libraries/popper.js@1.16.1_dist_umd_popper.min.js')}}"></script>
    <script src="{{asset('js/libraries/bootstrap@4.6.2_dist.bundle.min.js')}}"></script>
    <script src="{{asset('js/libraries/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/libraries/select2@4.1.0_dist_js.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/createStudent.css')}}">
    <script src="{{asset("js/createStudent.js")}}"></script>

    <title>Document</title>
</head>
<body>
    {{-- header content --}}
    <div class="container-fluid bg-light">
        <div class="row bg-light mb-4" style="
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow:  5px 5px 7px #d6d6d6;
        ">
            <header class="py-2">
                <span class="fs-3">Students</span>
                <span class="px-3 ">Register new student</span>
            </header>
        </div>

        <div class="content">
            <div class="p-2 px-3 lead">
                <span>Register new student</span>
            </div>
            <hr>
            <form action="{{ route('studentAnnuals.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                        {{-- GeneralInfo --}}
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
                                <div class="col-2 d-flex justify-content-center pt-5">
                                    <div class="uploadProfile">
                                        <label class="custom_file_upload_profile" for="file">
                                            <div class="iconUploadProfile">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
                                            </div>
                                            <div class="textUploadProfile">
                                                <span class="text-center">Click to upload image</span>
                                                </div>
                                                <input type="file" id="file" name="photo">
                                            </label>
                                    </div>
                                </div>

                                {{-- input form --}}
                                <div class="col-8 py-3">
                                    <div class="container-fluid p-0">
                                        <div class="row mb-3">
                                            <label for="idCard" class="col-sm-2 text-end col-form-label fw-bolder">ID Card</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control shadow-none form-control-sm " name="idCard" id="idCard" disabled placeholder="ID Card (Auto generate)">
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
                                                <input type="text" class="form-control shadow-none form-control-sm" id="nameKh" name="nameKh" value="{{old('nameKh') }}" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nameLatin" class="col-sm-2 col-form-label text-end fw-bolder">Name Latin <strong>*</strong></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control shadow-none form-control-sm" name="nameLatin" id="nameLatin" value="{{old('nameLatin') }}" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="gender" class="col-sm-2 col-form-label text-end fw-bolder">Gender <strong>*</strong></label>
                                            <div class="col-sm-10">
                                                <select class="form-select form-select-sm form-comtrol shadow-none" name="gender" id="gender" required>
                                                    <option selected disabled>Choose your gender</option>
                                                    @foreach ($optionGenders as $og)
                                                        <option value="{{ $og->id }}">{{ $og->name_kh }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="dob" class="col-sm-2 col-form-label text-end fw-bolder">Date of Birth <strong>*</strong></label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control shadow-none form-control-sm" name="dob" id="dob" required value="{{old('dob')}}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="pob" class="col-sm-2 col-form-label text-end fw-bolder">Place of Birth</label>
                                            <div class="col-sm-10">
                                                <select class="form-select form-select-sm form-comtrol shadow-none" name="pob">
                                                    <option value="" selected disabled>Select your place</option>
                                                    @foreach ($originOption as $origin)
                                                        <option value="{{$origin->id}}">{{$origin->name_kh}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="redie" class="col-sm-2 text-end col-form-label fw-bolder">Radie</label>
                                            <div class="col-sm-10 d-flex align-item-center">
                                                <input type="checkbox" class="checkbox" name="radie" value="true" id="redie">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="observation" class="col-sm-2 text-end col-form-label fw-bolder">Observation</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control shadow-none" cols="30" rows="10" name="observation" id="observation">{{old('observation')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
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
                                            <div class="row mb-3">
                                                <label for="origin" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Origin <sup>*</sup></label>
                                                <div class="col-sm-10">
                                                    <select class="form-select form-select-sm form-comtrol shadow-none" name="origin" id="origin" required>
                                                        <option selected disabled value="">Select your origin</option>
                                                        @foreach ($originOption as $origin)
                                                            <option value="{{$origin->id}}">{{$origin->name_kh}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="tel" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="phone" value="{{old('phone')}}" id="tel">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-sm shadow-none" name="email" id="email" value="{{old('email')}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="currentAddress" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Current Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="currentAddress" id="currentAddress" value="{{old('currentAddress')}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="perAddress" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Permanent Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="perAddress" id="perAddress" value="{{old('perAddress')}}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- Parent Info --}}
                                    <div id="pinfo" class="tab-pane fade"><br>
                                        <div class="container">

                                            <div class="row mb-3">
                                                <label for="parentName" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="parentName" id="parentName" value="{{old('parentName')}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="parentOcc" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Occupation</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="parentOcc" id="parentOcc" value="{{old('parentOcc')}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="parentAddress" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="parentAddress" id="parentAddress" value="{{old('parentAddress')}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="parentTel" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Parent Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="parentTel" id="parentTel" value="{{old('parentTel')}}">
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    {{-- hight school info --}}
                                    <div id="hsinfo" class="tab-pane fade"><br>
                                        <div class="container">

                                            <div class="row mb-3">
                                                <label for="hSchool" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">High School</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select form-select-sm form-comtrol shadow-none" name="hschool" id="hSchool">
                                                        <option selected disabled value="">Select your heighSchool</option>
                                                        @foreach ($heighSchoolOps as $hschool)
                                                            <option value="{{$hschool->id}}">{{$hschool->name_kh}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="mcsNo" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">MCS No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="mcsNo" value="{{old('mcsNo')}}" id="mcsNo">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="canId" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder">Can ID</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm shadow-none" name="canid" value="{{old('canId')}}" id="canId">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- New Academic Information content--}}

                        <div id="newAcInfo" class="tab-pane fade"><br>
                            <div class="container">

                                <div class="row mb-3">
                                    <label for="acaYear" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Academic Year <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="acaYear" id="acaYear" required>
                                            @foreach ($optionAc as $e)
                                                <option value="{{$e->id}}">{{$e->name_kh}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="promotion" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Promotion <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="promotion" id="promotion" required>
                                            <option selected disabled value="">Choose your promotion</option>
                                            @foreach ($promotions as $e)
                                                <option value="{{$e->id}}">{{$e->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="degree" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Degree <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="degree" id="degree" required>
                                            @foreach ($optionDegrees as $e)
                                                <option value="{{$e->id}}">{{$e->name_kh}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="grade" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Grade <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="grade" id="grade" required>
                                            @foreach ($optionGrades as $e)
                                                <option value="{{$e->id}}">{{$e->name_kh}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="department" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Department <sup>*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="department" id="department" required>
                                            <option value="" selected disabled>Choose your department</option>
                                            @foreach ($departments as $e)
                                                <option value="{{$e->id}}">{{$e->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="option" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Option</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="option" id="option">
                                            <option selected="selected" value=""></option>
                                            @foreach ($departmentOption as $e)
                                                <option value="{{ $e->id }}">{{ $e->code }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="group" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Group</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="group" id="group">
                                            <option selected disabled value="">Choose your group</option>
                                            @foreach ($groups as $e)
                                                <option value="{{$e->id}}">{{$e->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="history" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">History</label>
                                    <div class="col-sm-10">
                                        <select class="form-select form-select-sm form-comtrol shadow-none" name="history" id="history">
                                            <option selected  value="">Select your history</option>
                                            @foreach ($histories as $e)
                                                <option value="{{$e->id}}">{{$e->name_en}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Redouble</label>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redI1" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. I1</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redI2" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. I2</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redI3" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. I3</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redI4" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. I4</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redI5" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. I5</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm text-end fw-bolder"></label>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redT1" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. T1</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redT2" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. T2</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redT3" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. T3</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redM1" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. M1</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="redM2" id=""><label class="fw-semibold col-form-label-sm px-2"> Red. M2</label>
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <label for="selectWithSearch" class="col-sm-2 col-form-label col-form-label text-end fw-bolder">Scholarships</label>
                                    <div class="col-sm-10">
                                        <select class="form-comtrol" style="width: 100%" name="scholarships" id="selectWithSearch">
                                            <option selected value="">Select options</option>
                                            @foreach ($scholarships as $e)
                                                <option value="{{$e->id}}">{{$e->code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-3">
                    <div class="row mb-3">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <a type="button" href="{{route('studentAnnuals.create')}}"class="btn btnCancel shadow-none mr-2">Cancel</a>
                            <button class="btnCreate" type="submit">
                                <span>Create</span>
                                <span>
                                    Sure ?
                                </span>
                                <span>
                                    Created
                                <svg id="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M8.00011 13L12.2278 16.3821C12.6557 16.7245 13.2794 16.6586 13.6264 16.2345L22.0001 6"></path> <path fill="#ffffff" d="M11.1892 12.2368L15.774 6.63327C16.1237 6.20582 16.0607 5.5758 15.6332 5.22607C15.2058 4.87635 14.5758 4.93935 14.226 5.36679L9.65273 10.9564L11.1892 12.2368ZM8.02292 16.1068L6.48641 14.8263L5.83309 15.6248L2.6 13.2C2.15817 12.8687 1.53137 12.9582 1.2 13.4C0.868627 13.8419 0.95817 14.4687 1.4 14.8L4.63309 17.2248C5.49047 17.8679 6.70234 17.7208 7.381 16.8913L8.02292 16.1068Z" clip-rule="evenodd" fill-rule="evenodd"></path></g></svg>
                                </span>
                            </button>
                            {{-- <button type="submit" class="btn btn-dark">create</button> --}}
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
@endsection
