@extends('layout.app')
@section('coursesProgram')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/coureseProgram.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <title>coursesProgram</title>

    <style>
        @import 'path/to/bootstrap-source/_reboot.scss';
        /* Override Bootstrap styles */
        ol, ul {
            padding-left:0;
        }
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
                    <button class="btn btn-primary float-end">Export</button>
                </div>
            </div>
            <div class="barTabs p-2">
                <!--general info Nav tabs content-->
                <ul class="nav nav-tabs">
                    <li class="nav-item"  id="Activate">
                        <a class="nav-link active" data-toggle="tab" href="#GeneralInfo">Activate Course Program</a>
                    </li>
                    <li class="nav-item" id="Deactvate">
                        <a class="nav-link " data-toggle="tab" href="#newAcInfo">Deactvate Course Program <span class="text-danger">*</span>
                        </a>
                    </li>
                </ul>

                <!--general info Tab panes content-->
                <div class="tab-content">

                    <!-- content1 -->
                    <div id="GeneralInfo" class="tab-pane active"><br>
                        <div class="d-flex">
                            <label class="form-label " for="">Show</label>
                            <select name="" id="" style="width: 70px; margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-select shadow-none">
                              <option value="">25</option>
                              <option value="">10</option>
                              <option value="">50</option>
                              <option value="">75</option>
                              <option value="">100</option>
                            </select>
                            <label class="form-label" for="" style="margin-left: 10px;">entries</label>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex" style="margin-top: 5px;">
                                <select name="" id="" style="width: 120px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                <option value="">Department</option>
                                <option value="">AMS</option>
                                <option value="">GAR</option>
                                <option value="">GCA</option>
                                <option value="">GCI</option>
                                <option value="">GEE</option>
                                <option value="">GGG</option>
                                <option value="">GIC</option>
                                <option value="">GIM</option>
                                <option value="">GRU</option>
                                <option value="">GS</option>
                                <option value="">GTI</option>
                                <option value="">GTR</option>
                                <option value="">IME</option>
                                <option value="">OAC</option>
                                <option value="">SA</option>
                                <option value="">SF</option>
                                <option value="">TC</option>
                                </select>
                                <select name="" id="" style="width: 120px;margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Semester</option>
                                    <option value="">Semester1</option>
                                    <option value="">Semester2</option>
                                </select>
                                <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Degree</option>
                                    <option value="">Engineer</option>
                                    <option value="">Associate</option>
                                    <option value="">Doctoral</option>
                                    <option value="">Master</option>
                                    <option value="">Bachelor</option>
                                    <option value="">International</option>
                                </select>
                                <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Year</option>
                                    <option value="">First Year</option>
                                    <option value="">Second YEAR</option>
                                    <option value="">Third Year</option>
                                    <option value="">Fourth Year</option>
                                    <option value="">Fifth Year</option>
                                </select>
                                <select name="" id="" style="width: 170px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Permitted department</option>
                                    <option value="">AMS</option>
                                <option value="">GAR</option>
                                <option value="">GCA</option>
                                <option value="">GCI</option>
                                <option value="">GEE</option>
                                <option value="">GGG</option>
                                <option value="">GIC</option>
                                <option value="">GIM</option>
                                <option value="">GRU</option>
                                <option value="">GS</option>
                                <option value="">GTI</option>
                                <option value="">GTR</option>
                                <option value="">IME</option>
                                <option value="">OAC</option>
                                <option value="">SA</option>
                                <option value="">SF</option>
                                <option value="">TC</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-3">
                                <div class="d-flex float-end">
                                    <label for="">Search:</label>
                                    <input type="text" style=" margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-control shadow-none" >
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name in Khmer</th>
                                        <th>Code</th>
                                        <th>Class</th>
                                        <th>Permitted to</th>
                                        <th>Semester</th>
                                        <th>Course</th>
                                        <th>TD</th>
                                        <th>TP</th>
                                        <th>Credit</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            គីមីទឹក <br>
                                            Water Chemistry <br>
                                            Chimie des Eaux <br>
                                        </td>
                                        <td></td>
                                        <td>I4GCA</td>
                                        <td></td>
                                        <td>Semester 1</td>
                                        <td>16</td>
                                        <td>8</td>
                                        <td>24</td>
                                        <td>2</td>
                                        <td>
                                            <a href="{{route('coursesProgram/edit')}}" class="btn p-0 border-0 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
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
                                            <a href="{{ route('studentAnnuals/show') }}" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Detail">
                                                <svg width="30" height="30" fill="#00aaff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4ZM4 18c0-2.66 5.33-4 8-4s8 1.34 8 4v2H4v-2Z" clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                            <span>Showing 1 to 25 of 1,562 entries</span>
                        </div>
                        <div class="float-end">
                            {{-- <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                  </li>
                                  <li class="page-item" aria-current="page">
                                    <a class="page-link" href="#">3</a>
                                  </li>
                                  <li class="page-item " aria-current="page">
                                    <a class="page-link" href="#">4</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                              </nav> --}}
                        </div>
                    </div>

                    <!-- content2 -->
                    <div id="newAcInfo" class="tab-pane fade"><br>
                        <div class="d-flex">
                            <label class="form-label " for="">Show</label>
                            <select name="" id="" style="width: 70px; margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-select shadow-none">
                              <option value="">25</option>
                              <option value="">10</option>
                              <option value="">50</option>
                              <option value="">75</option>
                              <option value="">100</option>
                            </select>
                            <label class="form-label" for="" style="margin-left: 10px;">entries</label>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex" style="margin-top: 5px;">
                                <select name="" id="" style="width: 120px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                <option value="">Department</option>
                                <option value="">AMS</option>
                                <option value="">GAR</option>
                                <option value="">GCA</option>
                                <option value="">GCI</option>
                                <option value="">GEE</option>
                                <option value="">GGG</option>
                                <option value="">GIC</option>
                                <option value="">GIM</option>
                                <option value="">GRU</option>
                                <option value="">GS</option>
                                <option value="">GTI</option>
                                <option value="">GTR</option>
                                <option value="">IME</option>
                                <option value="">OAC</option>
                                <option value="">SA</option>
                                <option value="">SF</option>
                                <option value="">TC</option>
                                </select>
                                <select name="" id="" style="width: 120px;margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Semester</option>
                                    <option value="">Semester1</option>
                                    <option value="">Semester2</option>
                                </select>
                                <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Degree</option>
                                    <option value="">Engineer</option>
                                    <option value="">Associate</option>
                                    <option value="">Doctoral</option>
                                    <option value="">Master</option>
                                    <option value="">Bachelor</option>
                                    <option value="">International</option>
                                </select>
                                <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Year</option>
                                    <option value="">First Year</option>
                                    <option value="">Second YEAR</option>
                                    <option value="">Third Year</option>
                                    <option value="">Fourth Year</option>
                                    <option value="">Fifth Year</option>
                                </select>
                                <select name="" id="" style="width: 170px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select shadow-none">
                                    <option value="">Permitted department</option>
                                    <option value="">AMS</option>
                                <option value="">GAR</option>
                                <option value="">GCA</option>
                                <option value="">GCI</option>
                                <option value="">GEE</option>
                                <option value="">GGG</option>
                                <option value="">GIC</option>
                                <option value="">GIM</option>
                                <option value="">GRU</option>
                                <option value="">GS</option>
                                <option value="">GTI</option>
                                <option value="">GTR</option>
                                <option value="">IME</option>
                                <option value="">OAC</option>
                                <option value="">SA</option>
                                <option value="">SF</option>
                                <option value="">TC</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-3">
                                <div class="d-flex float-end">
                                    <label for="">Search:</label>
                                    <input type="text" style=" margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-control shadow-none" >
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name in Khmer</th>
                                        <th>Code</th>
                                        <th>Class</th>
                                        <th>Permitted to</th>
                                        <th>Semester</th>
                                        <th>Course</th>
                                        <th>TD</th>
                                        <th>TP</th>
                                        <th>Credit</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            កម្មវិធីកុំព្យូទ័រសម្រាប់ប្រតិកម្មគីមី <br>
                                            Computing Software for Chemical Reaction <br>
                                            Logiciels de Calcul pour la Réaction Chimique <br>
                                        </td>
                                        <td></td>
                                        <td>I5GCA</td>
                                        <td></td>
                                        <td>Semester 1</td>
                                        <td>32</td>
                                        <td>0</td>
                                        <td>32</td>
                                        <td>3</td>
                                        <td>
                                            <a href="{{route('coursesProgram/edit')}}" class="btn p-0 border-0 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                <svg width="25" height="25" fill="none" stroke="#007bff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn p-0 px-2 border-0" data-bs-toggle="modal" data-bs-target="#delete2">
                                                <svg width="25" height="25" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 6h18"></path>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <path d="M10 11v6"></path>
                                                    <path d="M14 11v6"></path>
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="delete2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <a href="{{ route('studentAnnuals/show') }}" class="btn p-0 border-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="View Detail">
                                                <svg width="30" height="30" fill="#00aaff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M16 8c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4ZM4 18c0-2.66 5.33-4 8-4s8 1.34 8 4v2H4v-2Z" clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                            <span>Showing 1 to 25 of 1,562 entries</span>
                        </div>
                        <div class="float-end">
                            {{-- <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                  </li>
                                  <li class="page-item" aria-current="page">
                                    <a class="page-link" href="#">3</a>
                                  </li>
                                  <li class="page-item " aria-current="page">
                                    <a class="page-link" href="#">4</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                              </nav> --}}
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
    $(document).ready(function(){
        $("#Deactvate").click(function(){
            $("#Activate").find("a").removeClass("active");
            $("#Deactvate").find("a").addClass("active");
            $("#GeneralInfo").removeClass("active");
            $("#GeneralInfo").addClass("fade");
            $("#newAcInfo").removeClass("fade");
            $("#newAcInfo").addClass("active");


        });
        $("#Activate").click(function(){
            $("#Activate").find("a").addClass("active");
            $("#Deactvate").find("a").removeClass("active");
            $("#newAcInfo").removeClass("active");
            $("#newAcInfo").addClass("fade");
            $("#GeneralInfo").removeClass("fade");
            $("#GeneralInfo").addClass("active");

        });

    });
</script>
</html>
@endsection

