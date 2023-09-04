@extends('layout.app')
@section('coursesProgram')
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/coureseProgram.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="py-2">
            <span class="fs-3">Course Programs</span>
            <span class="px-3">All existing course program</span>
        </header>
        <div class="box">
            <hr>
            <div class="bt">
            <button type="button" class="btn addStu btn-sm text-light"><svg width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.75 12A7.25 7.25 0 0 1 12 4.75v0A7.25 7.25 0 0 1 19.25 12v0A7.25 7.25 0 0 1 12 19.25v0A7.25 7.25 0 0 1 4.75 12v0Z"></path>
                            <path d="M12 8.75v6.5"></path>
                            <path d="M15.25 12h-6.5"></path>
                        </svg>Add</button>
                        <button type="button" class="btn someLink btn-sm text-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span> 
                        </button></div>
        </div>
        <div class="barTabs p-2"> 
        <ul class="nav nav-tabs">
      <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#GeneralInfo">Activate Course Program</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#newAcInfo">Deativate Course Program<span class="text-danger">*</span>
          </a>
      </li>
  </ul>

  <div class="tab-content">
      
     
      <div id="GeneralInfo" class="tab-pane active"><br>
        
      </div>

     
      <div id="newAcInfo" class="tab-pane fade"><br>
    
      </div>
  </div>
</div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/coureseProgram.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h4>Course Parograms <font style="font-size: 15px;color: rgb(175, 175, 176);">All exising course program</font></h4>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="box">
                <button class="btn btn-primary mt-3">Add</button>
                <button class="btn btn-primary mt-3 float-end">Export</button>
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
                            <label class="form-label" for="">Show</label>
                            <select name="" id="" style="width: 70px; margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-select">
                              <option value="">25</option>
                              <option value="">10</option>
                              <option value="">50</option>
                              <option value="">75</option>
                              <option value="">100</option>
                            </select>
                            <label class="form-label" for="" style="margin-left: 10px;">entries</label>
                        </div>
                        <div class="d-flex" style="margin-top: 5px;">
                            <select name="" id="" style="width: 120px; transform: translateY(-15%); font-size: 13px;" class="form-select">
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
                            <select name="" id="" style="width: 120px;margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
                                <option value="">Semester</option>
                                <option value="">Semester1</option>
                                <option value="">Semester2</option>
                            </select>
                            <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
                                <option value="">Degree</option>
                                <option value="">Engineer</option>
                                <option value="">Associate</option>
                                <option value="">Doctoral</option>
                                <option value="">Master</option>
                                <option value="">Bachelor</option>
                                <option value="">International</option>
                            </select>
                            <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
                                <option value="">Year</option>
                                <option value="">First Year</option>
                                <option value="">Second YEAR</option>
                                <option value="">Third Year</option>
                                <option value="">Fourth Year</option>
                                <option value="">Fifth Year</option>
                            </select>
                            <select name="" id="" style="width: 170px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
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
                            <div class="d-flex" style="margin-left: 510px;">
                                <label for="">Search:</label>
                                <input type="text" style=" margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-control" >
                            </div>
                        </div>
                        <div class="">
                            <table class="table table-hover">
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
                                            <button class="btn btn-warning">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                            
                                </tbody>
                               
                            </table>
                            <span>Showing 1 to 25 of 1,562 entries</span>
                        </div>
                        <div class="float-end">
                            <nav aria-label="...">
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
                              </nav>
                        </div>
                    </div>
              
                    <!-- content2 -->
                    <div id="newAcInfo" class="tab-pane fade"><br>
                        <div id="GeneralInfo" class="tab-pane active"><br>
                            <div class="d-flex">
                                <label class="form-label" for="">Show</label>
                                <select name="" id="" style="width: 70px; margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-select">
                                  <option value="">25</option>
                                  <option value="">10</option>
                                  <option value="">50</option>
                                  <option value="">75</option>
                                  <option value="">100</option>
                                </select>
                                <label class="form-label" for="" style="margin-left: 10px;">entries</label>
                            </div>
                            <div class="d-flex" style="margin-top: 5px;">
                                <select name="" id="" style="width: 120px; transform: translateY(-15%); font-size: 13px;" class="form-select">
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
                                <select name="" id="" style="width: 120px;margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
                                    <option value="">Semester</option>
                                    <option value="">Semester1</option>
                                    <option value="">Semester2</option>
                                </select>
                                <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
                                    <option value="">Degree</option>
                                    <option value="">Engineer</option>
                                    <option value="">Associate</option>
                                    <option value="">Doctoral</option>
                                    <option value="">Master</option>
                                    <option value="">Bachelor</option>
                                    <option value="">International</option>
                                </select>
                                <select name="" id="" style="width: 120px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
                                    <option value="">Year</option>
                                    <option value="">First Year</option>
                                    <option value="">Second YEAR</option>
                                    <option value="">Third Year</option>
                                    <option value="">Fourth Year</option>
                                    <option value="">Fifth Year</option>
                                </select>
                                <select name="" id="" style="width: 170px; margin-left: 5px; transform: translateY(-15%); font-size: 13px;" class="form-select">
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
                                <div class="d-flex" style="margin-left: 510px;">
                                    <label for="">Search:</label>
                                    <input type="text" style=" margin-left: 10px; transform: translateY(-15%);font-size: 13px;" class="form-control" >
                                </div>
                            </div>
                            <div class="">
                                <table class="table table-hover">
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
                                                <button class="btn btn-warning">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                   
                                </table>
                                <span>Showing 1 to 25 of 1,562 entries</span>
                            </div>
                            <div class="float-end">
                                <nav aria-label="...">
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
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</body>
<script>
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

   