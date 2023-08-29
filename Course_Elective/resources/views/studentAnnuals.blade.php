@extends('layout.app')
@section('students')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- CDN --}}
        <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        {{-- endCDN --}}
        <link rel="stylesheet" href="{{asset('css/studentAnnuals.css')}}">
        <title>Document</title>
    </head>
    <body>
        <div class="container-fluid bg-light vh-100">
            <header class="py-2">
                <span class="fs-3">Students</span>
                <span class="px-3">All existing students</span>
            </header>
            <div class="contentStu">
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
                    <form action="" class="mt-2">
                        <table class="table border table-striped mr-2 table-bordered table-hover table-sm">
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
                                <tr>
                                    <td>ID Card</td>
                                    <td>Name KH</td>
                                    <td>Name Latin</td>
                                    <td>Date of Birth</td>
                                    <td>Gender</td>
                                    <td>Class</td>
                                    <td>Option</td>
                                    <td>Group</td>
                                    <td class="btnAction">
                                        <a href="#" type="button" class="btn edit btn-info p-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                        <button type="button" class="btn delete btn-danger p-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>

                                        <button type="button" class="btn view btn-primary p-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </button>



                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
