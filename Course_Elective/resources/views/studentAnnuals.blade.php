@extends('layout.app')
@section('students')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{asset('css/libraries/bootstrap@5.3.1_dist_css_bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/libraries/fonts.googleapis.css')}}" rel="stylesheet">
        <script src="{{asset('js/libraries/bootstrap@5.3.1_dist_js.bundle.min.js')}}"></script>
        <script src="{{asset('js/libraries/jquery-3.6.0.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/libraries/datatables_1.10.21.bootstrap4.min.css')}}">
        <script src="{{asset('js/libraries/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/libraries/datatables_1.10.21_jquery.min.js')}}"></script>
        <script src="{{asset('js/libraries/datatables_1.10.21.bootstrap4.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/studentAnnuals.css')}}">
        <link rel="stylesheet" href="{{asset('js/studentAnnuals.js')}}">
        <title>Student Annuals</title>
    </head>
    <body>
        <div class="container-fluid bg-light">
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
            <div class="contentStu px-3" style="padding-top: 16px">
                <div class="row">
                    <div class="col-8">
                        <div class="input-group">
                            <a href="{{ route('studentAnnuals.create') }}" type="button" class="btn btn-primary text-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Create a Student">
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
                    <div class="col-12">
                        <div class="row g-2 align-items-center">
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="" selected disabled>Academic Years</option>
                                    @foreach ($optionAc as $years)
                                        <option value="{{ $years->id }}">{{ $years->name_kh }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option value="" selected disabled>Degree</option>
                                    @foreach ($optionDegrees as $op)
                                        <option value="{{ $op->id }}">{{ $op->name_kh }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected disabled value="">Grade</option>
                                    @foreach ($optionGrades as $ogra)
                                        <option value="{{ $ogra->id }}">{{ $ogra->name_kh }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected disabled value="">Department</option>
                                    @foreach ($departments as $od)
                                        <option value="{{ $od->id }}">{{ $od->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected="selected" value="">Gender</option><option value="1">ប្រុស</option><option value="2">ស្រី</option>
                                    <option selected disabled value="" >Gender</option>
                                    @foreach ($optionGenders as $og)
                                        <option value="{{ $og->id }}">{{ $og->name_kh }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected disabled value="">Option</option>
                                    @foreach ($departmentOption as $do)
                                        <option value="{{ $do->id }}">{{ $do->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-9">
                        <div class="row g-2 align-items-center">
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    @foreach ($semestersOption as $e)
                                        <option value="{{ $e->id}}">{{$e->name_kh}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select shadow-none">
                                    <option selected disabled value="">Origin</option>
                                    @foreach ($originOption as $origin)
                                        <option value="{{$origin->id}}">{{$origin->name_kh}}</option>
                                    @endforeach
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
                    {{-- <table class="table table-bordered table-striped mb-0 table-hover">
                        <thead>
                            <tr>
                                <th style="width: 10%">ID Card</th>
                                <th style="width: 18%">Name KH</th>
                                <th style="width: 18%">Name Latin</th>
                                <th style="width: 12%">Date of Birth</th>
                                <th style="width: 8.5%">Gender</th>
                                <th style="width: 8.5%">Class</th>
                                <th style="width: 8.5%">Option</th>
                                <th style="width: 8.5%">Group</th>
                                <th style="width: 8%">Action</th>
                            </tr>
                        </thead>
                    </table> --}}
                    <div class="container-fluid p-0">
                        <div style="overflow-x: auto;">
                            <table id="example" class="table table-bordered table-striped table-hover w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 10%"  >ID Card</th>
                                        <th style="width: 18%"  >Name KH</th>
                                        <th style="width: 18%"  >Name Latin</th>
                                        <th style="width: 12%"  >Date of Birth</th>
                                        <th style="width: 8.5%" >Gender</th>
                                        <th style="width: 8.5%" >Class</th>
                                        <th style="width: 8.5%" >Option</th>
                                        <th style="width: 8.5%" >Group</th>
                                        <th style="width: 8%"   >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($addStudent as $column)
                                        <tr>
                                            <td style="width: 10%">{{$column->id_card}}</td>
                                            <td style="width: 18%">{{$column->name_kh }}</td>
                                            <td style="width: 18%">{{$column->name_latin }}</td>
                                            <td style="width: 12%">{{$column->dob }}</td>
                                            <td style="width: 8.5%">Gender</td>
                                            <td style="width: 8.5%">Class</td>
                                            <td style="width: 8.5%">Option</td>
                                            <td style="width: 8.5%">Group</td>
                                            <td style="width: 8%"  >
                                                <a href="{{route('studentAnnuals/edit')}}" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                    <svg width="25" height="25" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </a>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn p-0 px-2 border-0" data-bs-toggle="modal" data-bs-target="#deleteStu">
                                                    <svg width="25" height="25" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <path d="M10 11v6"></path>
                                                        <path d="M14 11v6"></path>
                                                    </svg>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteStu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <p class="text-center fs-3">Delete the student!</p>
                                                                <p class="text-center">You will not be able to recover it</p>
                                                            </div>
                                                            <div class="modal-footer border-0 d-flex justify-content-center">
                                                                <button type="button" style="width: 110px; background-color:#FF8C00;" onmouseover="this.style.backgroundColor='#F88017';" onmouseout="this.style.backgroundColor='#FF8C00';" class="btn py-1 btn-secondary border-0" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" style="width: 110px" class="btn py-1 btn-primary border-0">Ok</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ route('studentAnnuals/show') }}" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Detail">
                                                    <svg width="30" height="30" fill="#00aaff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4ZM4 18c0-2.66 5.33-4 8-4s8 1.34 8 4v2H4v-2Z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>

            </div>
            <div class="row py-2 px-3">
                <div class="col-12 d-flex justify-content-center">
                    <a href="#top" type="button" class="btn p-0 border-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View Back to top !"><svg width="50" height="50" fill="none" stroke="#38d100" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m6 12 6-6 6 6"></path>
                        <path d="m6 18 6-6 6 6"></path>
                    </svg></a>
                </div>
            </div>

        </div>
        <script>
            // Initialize tooltips on button CRUD
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            $(document).ready(function() {
                $('#example').DataTable({
                    "scrollX": true, // Enable horizontal scrolling
                    "scrollY": "60hv", // Set the container wrapper's height to 400 pixels
                    "scrollCollapse": true // Enable scrollCollapse option
                });
            });
        </script>
    </body>
    </html>
@endsection

