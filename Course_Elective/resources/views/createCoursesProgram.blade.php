@extends('layout.app')
@section('createCoursesProgram')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/createCourseProgram.css')}}">

    <title>createCoursesProgram</title>
</head>
<body>
    <div class="container-fluid bg-light">
        <header class="py-2">
            <span class="fs-3">Course Program</span>
            <span class="px-3">All existing course program</span>
        </header>
        <div class="mainContent">
            <span class="fs-5 px-2">Create new course program</span>
            <hr class="m-2">

            <div class="container mt-4 w-75">

                <form action="" class="w-100">

                    <div class="mb-3 row bg-light">
                        <label for="nameKh" class="col-sm-3 col-form-label text-end fw-bolder">Name in Khmer <sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm  shadow-none w-75" id="nameKh">
                        </div>
                    </div>

                    <div class="mb-3 row bg-light">
                        <label for="nameEnglish" class="col-sm-3
                         col-form-label text-end fw-bolder">Name in English <sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm  shadow-none w-75" id="nameEnglish">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nameFre" class="col-sm-3
                         col-form-label text-end fw-bolder">Name in French <sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm  shadow-none w-75" id="nameFre">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="code" class="col-sm-3 col-form-label text-end fw-bolder">Code</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm  shadow-none w-50 " id="code">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="code" class="col-sm-3 col-form-label text-end fw-bolder">Course<sup class="text-danger">*</sup></label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control form-control-sm  shadow-none w-75" id="code">
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <label for="code" class="col-sm-3 col-form-label text-end fw-bolder">TD<sup class="text-danger">*</sup></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-control-sm  shadow-none" id="code">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <label for="code" class="col-sm-3 col-form-label text-end fw-bolder">TP<sup class="text-danger">*</sup></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-control-sm  shadow-none" id="code">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="code" class="col-sm-3 col-form-label text-end fw-bolder">Credit<sup class="text-danger">*</sup></label>
                        <div class="col-sm-3">
                            <input type="" class="form-control form-control-sm  shadow-none" id="code">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-sm-5">
                            <div class="row">
                                <label for="code" class="col-sm-9 col-form-label-sm text-end fw-bolder">Creditability For Transcript <sup class="text-danger">*</sup></label>
                                <div class="col-sm-3">
                                    <input class="form-check-input shadow-none" type="checkbox">
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label text-end fw-bolder">Degree <sup class="text-danger">*</sup></label>
                        <div class="col-sm-9 ">
                            <select class="form-control form-control-sm  shadow-none w-100" id="nameFre">
                                <option value="">Engineer</option>
                                <option value="">Associate</option>
                                <option value="">Doctoral</option>
                                <option value="">Master</option>
                                <option value="">Bachelor</option>
                                <option value="">International</option>
                              </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label text-end fw-bolder">Grade <sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm  shadow-none w-100" id="nameFre">
                                <option value="">First Year</option>
                                <option value="">Second Year</option>
                                <option value="">Third Year</option>
                                <option value="">Fourth Year</option>
                                <option value="">Fifth Year</option>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="code" class="col-sm-3 col-form-label text-end fw-bolder">Department<sup class="text-danger">*</sup></label>
                        <div class="col-sm-3">
                            <select class="form-control form-control-sm  shadow-none " id="nameFre">
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
                        <div class="col-1"></div>
                        <div class="col-sm-5">
                            <div class="row">
                                <label for="code" class="col-sm-3 col-form-label text-end fw-bolder">Option<sup class="text-danger">*</sup></label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm  shadow-none " id="nameFre">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label text-end fw-bolder">Semester<sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm  shadow-none w-100" id="nameFre">
                                <option value="">Semester1</option>
                                <option value="">Semester2</option>
                            </select>
                        </div>
                    </div>



                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label text-end fw-bolder">Active<sup class="text-danger">*</sup></label>
                        <div class="col-sm-1">
                           <input class="form-check-input shadow-none" type="checkbox">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="" class="col-sm-3 col-form-label  fw-bolder text-end">Permit responsibility to<sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm  shadow-none w-50" id="nameFre">
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
                    </div>
               </form>
            </div>

            <div class="col-sm-12 d-flex gap-2 justify-content-center">

                <a type="button" href=""class="btn btnCancel shadow-none mr-2">Cancel</a>


                <button class="btnCreate">
                    <span>Create</span>
                    <span>
                        Sure ?
                    </span>
                    <span>
                        Created !
                    <svg id="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M8.00011 13L12.2278 16.3821C12.6557 16.7245 13.2794 16.6586 13.6264 16.2345L22.0001 6"></path> <path fill="#ffffff" d="M11.1892 12.2368L15.774 6.63327C16.1237 6.20582 16.0607 5.5758 15.6332 5.22607C15.2058 4.87635 14.5758 4.93935 14.226 5.36679L9.65273 10.9564L11.1892 12.2368ZM8.02292 16.1068L6.48641 14.8263L5.83309 15.6248L2.6 13.2C2.15817 12.8687 1.53137 12.9582 1.2 13.4C0.868627 13.8419 0.95817 14.4687 1.4 14.8L4.63309 17.2248C5.49047 17.8679 6.70234 17.7208 7.381 16.8913L8.02292 16.1068Z" clip-rule="evenodd" fill-rule="evenodd"></path></g></svg>
                    </span>
                </button>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
@endsection

