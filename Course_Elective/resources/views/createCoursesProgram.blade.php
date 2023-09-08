@extends('layout.app')
@section('createCoursesProgram')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>createCoursesProgram</title>

    <style>
        .mainContent{
            border-top: 4px solid #00ABE4;
            border-radius: 5px;
        }

        /* Override Bootstrap styles */
        @import 'path/to/bootstrap-source/_reboot.scss';
        ol, ul {
            padding-left:0;
        }
    </style>
</head>
<body>
    <div class="container-fluid
        <header class="py-2">
            <span class="fs-3">Students</span>
            <span class="px-3">All existing students</span>
        </header>
        <div class="mainContent">
            <span class="fs-5 px-2">Create new course program</span>
            <hr class="m-2">

            <div class="container mt-4 w-75">

                <form action="" class="w-100 ">

                    <div class="mb-3 row">
                        <label for="nameKh" class="col-sm-2 col-form-label text-end fw-bolder">Name in Khmer <sup class="text-danger">*</sup></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm  shadow-none w-75" id="nameKh">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nameEnglish" class="col-sm-2 col-form-label text-end fw-bolder">Name in English <sup class="text-danger">*</sup></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm  shadow-none w-75" id="nameEnglish">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nameFre" class="col-sm-2 col-form-label text-end fw-bolder">Name in French <sup class="text-danger">*</sup></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm  shadow-none w-75" id="nameFre">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="code" class="col-sm-2 col-form-label text-end fw-bolder">Code</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm  shadow-none w-50 " id="code">
                        </div>
                    </div>

                    <div class="mb-3 row">

                        <label for="Course" class="col-sm-2 col-form-label text-end fw-bolder">Coruse <sup class="text-danger">*</sup></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm  shadow-none w-25" id="Course">
                        </div>

                    </div>
                    <div class="row">
                        <label for="" class="col-2 form-label col-form-label text-end fw-bolder">Credit<sup class="text-danger">*</sup></label>
                        <div class="col-3">
                        </div>
                        <label for="Type_Course" class="col-4 form-label text-end fw-bolder">Creditability For Transcript <sup class="text-danger">*</sup></label>
                        <div class="col-3">
                           <input type="checkbox">
                        </div>
                     </div>



                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Degree<sup class="text-danger">*</sup></label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option value="">Engineer</option>
                          <option value="">Associate</option>
                          <option value="">Doctoral</option>
                          <option value="">Master</option>
                          <option value="">Bachelor</option>
                          <option value="">International</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Grade<sup class="text-danger">*</sup></label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option value="">First Year</option>
                          <option value="">Second Year</option>
                          <option value="">Third Year</option>
                          <option value="">Fourth Year</option>
                          <option value="">Fifth Year</option>
                        </select>
                    </div>

                    <div class="row">
                <label for="" class="col-2 form-label col-form-label text-end fw-bolder">Department<sup class="text-danger">*</sup></label>
                <div class="col-3">
                    <select class="form-select form-control p-0 px-2 shadow-none m-0">
                        <option value="">AMS</option>
                        <option value="">GAR</option>
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
                <label for="Type_Course" class="col-4 form-label text-end fw-bolder">Option<sup class="text-danger">*</sup></label>
                <div class="col-3">
                    <select class="form-select form-control p-0 shadow-none px-2 m-0">
                    </select>
                </div>
            </div>


                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Semester<sup class="text-danger">*</sup></label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option value="">Semester1</option>
                          <option value="">Semester2</option>
                        </select>
                    </div>

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label text-end fw-bolder">Active<sup class="text-danger">*</sup></label>
                        <div class="col-sm-1">
                           <input type="checkbox">
                    </div>


                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Permit responsibility to<sup class="text-danger">*</sup></label>
                        <select class="form-select" id="inputGroupSelect01">
                          <option value="">AMS</option>
                          <option value="">GAR</option>
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
                          <option value="">0AC</option>
                          <option value="">SA</option>
                          <option value="">SF</option>
                          <option value="">TC</option>
                          <option value="">Department</option>
                        </select>
                    </div>


                </form>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger" type="button">Cancel</button>
                <button class="btn btn-primary" type="button">Create</button>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
@endsection

