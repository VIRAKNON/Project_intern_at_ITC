-@extends('layout.app')
@section('coursesProgram')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/coureseProgram.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <title>coursesProgram</title>
    <style>

    </style>
</head>
<body>
    <div class="container-fluid">

        <div class="row bg-light mb-3" style="
                border-radius: 5px;
                background-color: #ffffff;
                box-shadow:  5px 5px 7px #d6d6d6;
            ">
            <header class="py-2">
                <span class="fs-3">Course Programs</span>
                <span class="px-3">All existing students</span>
            </header>
        </div>

        <div class="row px-2" style="
                    height: auto !important ;
                    border-top: 4px solid #00ABE4;
                    border-radius: 5px;
                ">
            <div class="row px-2 py-2">
                <div class="col-12">
                    <a href="{{route('coursesProgram/create')}}" type="button" class="btn btn-primary px-3 shadow-none">
                        <svg width="20" height="20" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10S2 17.52 2 12Zm11 1h4v-2h-4V7h-2v4H7v2h4v4h2v-4Z" clip-rule="evenodd"></path>
                        </svg>
                        Add
                    </a>
                    <button class="btn text-light btn-info float-end px-4">Export</button>
                </div>
            </div>
            <div>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Activate Course Program</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Deactivate Course Program</button>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active py-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="row mb-3 g-2">
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
                        <div class="col-auto">
                            <select class="form-select shadow-none">
                                <option selected="selected" value="">Permitted department</option>
                                @foreach ($departments as $e)
                                <option value="{{ $e->id}}">{{$e->code}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="">
                        <table id="activate" class="table table-bordered table-striped table-hover w-100">
                            <thead>
                                <tr>
                                    <th style="width: 30%">Name in Khmer</th>
                                    <th style="width: 10%">Code</th>
                                    <th style="width: 8%" >Class</th>
                                    <th style="width: 12%">Permitted to</th>
                                    <th style="width: 10%">Semester</th>
                                    <th style="width: 6%" >Course</th>
                                    <th style="width: 4%" >TD</th>
                                    <th style="width: 4%" >TP</th>
                                    <th style="width: 6%" >Credit</th>
                                    <th style="width: 10%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 30%" ><span>គីមីទឹក</span> <br><span>Water Chemistry</span> <br><span>Chimie des Eaux</span></td>
                                    <td style="width: 10%" ></td>
                                    <td style="width: 8%"  >I4GCA</td>
                                    <td style="width: 12%" ></td>
                                    <td style="width: 10%" >Semester 1</td>
                                    <td style="width: 6%"  >16</td>
                                    <td style="width: 4%"  >8</td>
                                    <td style="width: 4%"  >24</td>
                                    <td style="width: 6%"  >2</td>
                                    <td style="width: 10%" >
                                        <a href="{{route('coursesProgram/edit')}}" class="btn p-0 border-0 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                            <svg width="25" height="25" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </a>
                                        <button class="btn btn-warning mx-1" style="font-size: 13px; padding:3 10;" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="deactive">
                                            Deactive
                                        </button>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn p-0 border-0" data-bs-toggle="modal" data-bs-target="#deleteStu">
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
                                                        <p class="text-center fs-3">Are you sure you want to delete this course?</p>
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade py-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="row mb-3 g-2">
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
                        <div class="col-auto">
                            <select class="form-select shadow-none">
                                <option selected="selected" value="">Permitted department</option>
                                @foreach ($departments as $e)
                                <option value="{{ $e->id}}">{{$e->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="container-fluid p-0">
                        <div style="overflow-x: auto;">
                            <table id="deactivate" class="table table-bordered table-striped table-hover w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 30%">Name in Khmer</th>
                                        <th style="width: 10%" >Code</th>
                                        <th style="width: 8%" >Class</th>
                                        <th style="width: 12%">Permitted to</th>
                                        <th style="width: 10%" >Semester</th>
                                        <th style="width: 6%" >Course</th>
                                        <th style="width: 4%" >TD</th>
                                        <th style="width: 4%" >TP</th>
                                        <th style="width: 6%" >Credit</th>
                                        <th style="width: 10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 30%" ><span>កម្មវិធីកុំព្យូទ័រសម្រាប់ប្រតិកម្មគីមី</span><br><span>Computing Software for Chemical Reaction</span><br><span>Logiciels de Calcul pour la Réaction Chimique</span></td>
                                        <td style="width: 10%"  ></td>
                                        <td style="width: 8%"  >I5GCA</td>
                                        <td style="width: 12%" ></td>
                                        <td style="width: 10%"  >Semester 1</td>
                                        <td style="width: 6%"  >32</td>
                                        <td style="width: 4%"  >0</td>
                                        <td style="width: 4%"  >32</td>
                                        <td style="width: 6%"  >3</td>
                                        <td style="width: 10%" >
                                            <a href="{{route('coursesProgram/edit')}}" class="btn p-0 border-0 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                <svg width="25" height="25" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>
                                            <button class="btn btn-success mx-1" style="font-size: 13px; padding:3 13;" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="active">
                                                Active
                                            </button>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn p-0 border-0" data-bs-toggle="modal" data-bs-target="#deleteStu">
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
                                                            <p class="text-center fs-3">Are you sure you want to delete this course?</p>
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
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // Initialize tooltips on button CRUD
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    $(document).ready(function() {
        $('#activate').DataTable({
            "scrollX": true, // Enable horizontal scrolling
            "scrollY": "60hv", // Set the container wrapper's height to 400 pixels
            "scrollCollapse": true // Enable scrollCollapse option
        });
    });

    $(document).ready(function() {
        $('#deactivate').DataTable({
            "scrollX": true, // Enable horizontal scrolling
            "scrollY": "60hv", // Set the container wrapper's height to 400 pixels
            "scrollCollapse": true // Enable scrollCollapse option
            
        });
    });
</script>
</html>
@endsection

