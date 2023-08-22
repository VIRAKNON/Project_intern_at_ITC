@extends('layout.app')
@section('students')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/studentAnnuals.css')}}">
        <title>Document</title>
    </head>
    <body>
        <div class="container-fluid bg-light vh-100">
            <header class="py-2">
                <span class="fs-3">Students</span>
                <span class="px-3">All existing students</span>
            </header>
            <div class="content">
                <div class="box1">
                    <span>
                        <div class="btn-group " role="group">
                            <a href="{{route('studentAnnuals.create')}}" type="button" class="btn addStu btn-sm text-light"><svg width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.75 12A7.25 7.25 0 0 1 12 4.75v0A7.25 7.25 0 0 1 19.25 12v0A7.25 7.25 0 0 1 12 19.25v0A7.25 7.25 0 0 1 4.75 12v0Z"></path>
                                <path d="M12 8.75v6.5"></path>
                                <path d="M15.25 12h-6.5"></path>
                            </svg>Add</a>
                            <button type="button" class="btn someLink btn-sm text-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-sm updateSchStu "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>Update-Scholaship-Students</button>
                        <button type="button" class="btn cloneSem btn-sm">Clone Semester II</button>
                        <button type="button" class="btn refresh btn-light btn-sm"><svg width="22" height="22" fill="none" stroke="#404040" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.25 4.75 8.75 7l2.5 2.25"></path>
                            <path d="m12.75 19.25 2.5-2.25-2.5-2.25"></path>
                            <path d="M9.75 7h3.5a6 6 0 0 1 6 6v.25"></path>
                            <path d="M14.25 17h-3.5a6 6 0 0 1-6-6v-.25"></path>
                        </svg></button>
                    </span>
                    <span class="float-end px-2">
                        <span class="dropdown">
                            <button class="btn action btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </span>
                        <span class="dropdown">
                            <button class="btn reporting btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reporting
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </span>
                        <span class="dropstart">
                            <button class="btn export btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Export data
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </span>
                    </span>
                </div>
                <hr>
                <div class="box2">
                    <div class="box2Left">
                        <div class="d-flex inline-block">
                            <div class="px-1">
                                <select class="years selectOp form-select-sm">
                                    <option selected>២០២០-២០២១</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="px-1">
                                <select class="degree selectOp form-select-sm">
                                    <option selected>Degree</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="px-1">
                                <select class="grade selectOp form-select-sm">
                                    <option selected>Grade</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="px-1">
                                <select class="department selectOp form-select-sm">
                                    <option selected>Department</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="px-1">
                                <select class="gender selectOp form-select-sm">
                                    <option selected>Gender</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="px-1">
                                <select class="option selectOp form-select-sm">
                                    <option selected>Option</option>
                                    <option value="1">_GTI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box2Right">
                        <div class="search px-2">
                            <div class="container-input">
                                <input type="text" placeholder="Search" name="text" class="input">
                                <svg fill="black" width="15px" height="15px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box3">
                    <div class="d-flex inline-block">
                        <div class="px-1">
                            <select class="semester selectOp form-select-sm">
                                <option selected>ឆមាសទី១</option>
                                <option value="1">ឆមាសទី២</option>
                            </select>
                        </div>
                        <div class="px-1">
                            <select class="origin selectOp form-select-sm">
                                <option selected>Origin</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="px-1">
                            <input type="text" class="group selectOp text-center" name="" id="" placeholder="Group">
                        </div>
                        <div class="px-1">
                            <select class="abc selectOp form-select-sm">
                                <option selected>With radié</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="px-1">
                            <select class="cde selectOp form-select-sm">
                                <option selected>With redouble</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <table class="table border table-striped mr-2">
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
