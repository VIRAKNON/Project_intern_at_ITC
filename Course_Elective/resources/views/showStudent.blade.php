@extends('layout.app')
@section('showStudent')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">

    {{-- endCDN --}}
    <link rel="stylesheet" href="{{asset('css/showStudent.css')}}">
    <title>show detail of student</title>
    <style>
        @import 'path/to/bootstrap-source/_reboot.scss';
        /* Override Bootstrap styles */
        ol, ul {
            padding-left:0;
        }
    </style>
</head>
<body>
    <div class="container-fluid vh-100 pt-4">

        <div class="contentShowStu">
            <div class="showProfileStu">
                <div class="topShowStuInfo">
                    <div class="row py-2">
                        <div class="col-12 image_showProfileStu d-flex justify-content-center">
                            <img src="" alt="profileStu">
                        </div>
                    </div>

                    <div class="row">
                        <h3 class="text-center pt-3">Student Name</h3>
                        <p class="text-center">Student ID</p>
                    </div>

                    <div class="card m-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bolder">Name Latin <span class="float-end fw-normal text-primary">StudentName</span></li>
                            <li class="list-group-item fw-bolder">Gender <span class="float-end fw-normal text-primary">M/F</span></li>
                            <li class="list-group-item fw-bolder">Date of Birth <span class="float-end fw-normal text-primary">12/01/2001</span></li>
                            <li class="list-group-item fw-bolder">Origin <span class="float-end fw-normal text-primary">Battombong</span></li>
                        </ul>
                    </div>

                    <div class="row borderd-0 m-3"><button type="button" class="btn col-12 w-100 my-2 fs-6 text-light" style="background-color: #274afcf2">Export</button></div>
                </div>

                <div class="card contactInfo w-100 mt-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fs-4">Contact Infomation</li>
                        <li class="list-group-item fw-bolder">
                            <svg width="20" height="20" fill="none" stroke="#004cff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.893 4.75H6.068c-.728 0-1.318.59-1.318 1.318 0 7.28 5.902 13.182 13.182 13.182.728 0 1.318-.59 1.318-1.318v-2.825l-3.107-2.071-1.611 1.61c-.28.28-.698.368-1.05.186a11.093 11.093 0 0 1-2.518-1.796 8.726 8.726 0 0 1-1.836-2.542c-.16-.34-.067-.733.199-1l1.637-1.637L8.893 4.75Z"></path>
                                <path d="M14 5.03a7.264 7.264 0 0 1 5 5.076"></path>
                            </svg>
                            Phone Number
                            <span class="float-end text-primary fw-normal">0213244353545</span>
                        </li>
                        <li class="list-group-item fw-bolder">
                            <svg width="20" height="20" fill="none" stroke="#004cff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.75 7.75a2 2 0 0 1 2-2h10.5a2 2 0 0 1 2 2v8.5a2 2 0 0 1-2 2H6.75a2 2 0 0 1-2-2v-8.5Z"></path>
                                <path d="m5.5 6.5 6.5 5.75 6.5-5.75"></path>
                            </svg>
                            Email
                            <span class="float-end text-primary fw-normal">studentEmail@gmail.com</span>

                        </li>
                        <li class="list-group-item fw-bolder">
                            <svg style="width: 20px; color:#004cff;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            Current Address <br>
                            <span class="float-start text-primary fw-normal py-2" style="padding-left: 25px">st 163, Sangkat Tonle Bassac, Khan Chamkarmon, Phnom Penh</span>
                        </li>
                        <li class="list-group-item fw-bolder">
                            <svg width="20" height="20" fill="none" stroke="#004cff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="m4.75 6.75 4.5-2v12.5l-4.5 2V6.75Z"></path>
                                <path d="m14.75 6.75 4.5-2v12.5l-4.5 2V6.75Z"></path>
                                <path d="m14.75 6.75-5.5-2v12.5l5.5 2V6.75Z"></path>
                            </svg>
                            Permanent Address <br>
                            <span class="float-start text-primary fw-normal py-2" style="padding-left: 25px">st 163, Sangkat Tonle Bassac, Khan Chamkarmon, Phnom Penh</span>
                    </ul>
                </div>

            </div>
            <div class="showInfoStu">
                <div class="subInfoStu w-100 p-0 m-0">
                    <div class="navTab_showStu">
                        <ul class="nav nav_tabs border-bottom-2 border-bottom border-primary" id="nav-tab" role="tablist">
                            <li class="nav-link active rounded-0 border-start-0" data-bs-toggle="tab" data-bs-target="#generalInfo" type="button">General Information</li>

                            <li class="nav-link rounded-0" data-bs-toggle="tab" data-bs-target="#academicYear" type="button">academicYear</li>

                        </ul>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active p-2" id="generalInfo">
                            <div class="container-fluid d-flex justify-content-between">
                                <div class="leftContent">
                                    <div class="card subLeft w-100 mt-2 border-start-0 border-end-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item fw-bolder">
                                                <svg width="24" height="24" fill="none" stroke="#0040ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.25 5.75a1 1 0 0 0-1-1H14a2 2 0 0 0-2 2v12.5l.828-.828a4 4 0 0 1 2.829-1.172h2.593a1 1 0 0 0 1-1V5.75Z"></path>
                                                    <path d="M4.75 5.75a1 1 0 0 1 1-1H10a2 2 0 0 1 2 2v12.5l-.828-.828a4 4 0 0 0-2.829-1.172H5.75a1 1 0 0 1-1-1V5.75Z"></path>
                                                </svg>
                                                Parent Name <br>
                                                <span class=" text-secondary fw-normal" style=" padding-left:1.7rem;">parentName</span>
                                            </li>
                                            <li class="list-group-item fw-bolder">
                                                <svg width="20" height="20" fill="#0040ff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 6.5v-2h-4v2h4Zm-10 2v11h16v-11H4Zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4v-2c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4Z"></path>
                                                </svg>
                                                Parent Occupation <br>
                                                <span class=" text-secondary fw-normal" style=" padding-left:1.7rem;">Parent Occupation</span>
                                            </li>
                                            <li class="list-group-item fw-bolder">
                                                <svg style="width: 20px; color:#274afcf2;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                                </svg>
                                                Parent Address <br>
                                                <span class=" text-secondary fw-normal" style=" padding-left:1.7rem;">Parent Address</span>
                                            </li>
                                            <li class="list-group-item fw-bolder">
                                                <svg width="20" height="20" fill="#0040ff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 3H2C.9 3 0 3.9 0 5v14c0 1.1.9 2 2 2h20c1.1 0 1.99-.9 1.99-2L24 5c0-1.1-.9-2-2-2Zm0 16H2V5h20v14Zm-2.99-1.01L21 16l-1.51-2h-1.64c-.22-.63-.35-1.3-.35-2s.13-1.37.35-2h1.64L21 8l-1.99-1.99A7.474 7.474 0 0 0 16.28 10c-.18.64-.28 1.31-.28 2s.1 1.36.28 2a7.512 7.512 0 0 0 2.73 3.99ZM9 12c1.65 0 3-1.35 3-3s-1.35-3-3-3-3 1.35-3 3 1.35 3 3 3Zm0-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1Zm6 8.59c0-2.5-3.97-3.58-6-3.58s-6 1.08-6 3.58V18h12v-1.41ZM5.48 16c.74-.5 2.22-1 3.52-1 1.3 0 2.77.49 3.52 1H5.48Z"></path>
                                                </svg>
                                                Parent Phone Number <br>
                                                <span class=" text-secondary fw-normal" style=" padding-left:1.7rem;">Parent Phone Number</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="rightContent">
                                    <div class="card subLeft w-100 mt-2 border-start-0 border-end-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item fw-bolder">
                                                Redouble <br>
                                                <span class=" text-secondary fw-normal">no more</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h1 class="fs-4 px-2 mt-5">
                                <svg width="26" height="26" fill="#0040ff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 3h18c1.1 0 2 .9 2 2v14c0 1.1-.9 2-2 2h-7v-2h7V5H3v3H1V5c0-1.1.9-2 2-2ZM1 21v-3c1.66 0 3 1.34 3 3H1Zm0-7v2c2.76 0 5 2.24 5 5h2c0-3.87-3.13-7-7-7Zm0-2v-2c6.07 0 11 4.92 11 11h-2a9 9 0 0 0-9-9Zm10-.91v2L14.5 15l3.5-1.91v-2L14.5 13 11 11.09ZM9 9l5.5-3L20 9l-5.5 3L9 9Z" clip-rule="evenodd"></path>
                                </svg>
                                High School Information
                            </h1>
                            <hr>
                        </div>

                        <div class="tab-pane fade p-2" id="academicYear">

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>
</html>
@endsection
