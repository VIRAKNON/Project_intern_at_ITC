<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/coures_annuall.css')}}">
    <title>Course annually</title>
</head>
<body>
    <div class="container-fluid bg-light vh-100">
        <header class="py-2">
            <span class="fs-3">Course Annually</span>
            <span class="px-3">All existing course</span>
        </header>
        <div class="content">
            <div class="box1">
                <span>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn addStu btn-sm text-light"><svg width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.75 12A7.25 7.25 0 0 1 12 4.75v0A7.25 7.25 0 0 1 19.25 12v0A7.25 7.25 0 0 1 12 19.25v0A7.25 7.25 0 0 1 4.75 12v0Z"></path>
                            <path d="M12 8.75v6.5"></path>
                            <path d="M15.25 12h-6.5"></path>
                        </svg>Add</button>
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
                    <button class="btn btn-success btn-sm" id="btn_disable_scoring"><i class="fa fa-toggle-on"></i> Disable Scoring</button>
                    <button class="btn btn-warning btn-sm" id="btn_enable_scoring"><i class="fa fa-toggle-off"></i> Enable Scoring</button>
                    <button type="button" class="btn refresh btn-light btn-sm"> Only Retake Score</button>
                </span>
                <span class="float-end px-2">
                    <button class="btn btn-primary btn-sm" id="course_assignment"><i class="fa fa-map-signs"></i> Course Assignment</button>
                    <button class="btn btn-warning btn-sm" id="all_score_course_annual"><i class="fa fa-eye"></i> View Total Score </button>p
                </span>
            </div>
            <hr>
           <div class="box_body">
                <div class="row">
                    <div class="col-md-7" style="min-height: 15px; padding: 0 30px 15px 30px;" id="filter_panel">
                        <select class="" id="filter_academic_year" name="academic_year">
                            <option value="2023">២០២២-២០២៣</option>
                            <option value="2022">២០២១-២០២២</option>
                            <option value="2021">២០២០-២០២១</option>
                            <option value="2020">២០១៩-២០២០</option>
                            <option value="2019">២០១៨-២០១៩</option>
                            <option value="2018">២០១៧-២០១៨</option>
                            <option value="2017">២០១៦-២០១៧</option>
                            <option value="2016">២០១៥-២០១៦</option>
                            <option value="2015">២០១៤-២០១៥</option>
                            <option value="2014">២០១៣-២០១៤</option>
                            <option value="2013">២០១២-២០១៣</option>
                            <option value="2012">២០១១-២០១២</option>
                            <option value="2011">២០១០-២០១១</option>
                        </select>
                        <select class="" id="filter_department" name="department">
                            <option selected="selected" value="">Dept.</option>
                            <option value="20">AMS</option><option value="21">GAR</option>
                            <option value="1">GCA</option><option value="2">GCI</option>
                            <option value="3">GEE</option><option value="7">GGG</option>
                            <option value="4">GIC</option><option value="5">GIM</option>
                            <option value="6">GRU</option><option value="18">GS</option>
                            <option value="22">GTI</option><option value="16">GTR</option>
                            <option value="19">IME</option><option value="17">OAC</option>
                            <option value="12">SA</option><option value="13">SF</option><option value="8">TC</option>
                        </select>
                        <select id="department_option_id" name="department_option_id">
                            <option value="" selected=""></option>
                            <option value="1" class="department_option department_2" style="display: none">_Arch</option>
                            <option value="2" class="department_option department_2" style="display: none">_Civil</option>
                            <option value="3" class="department_option department_3" style="display: none">_EAT</option>
                            <option value="7" class="department_option department_6" style="display: none">g</option>
                            <option value="10" class="department_option department_1" style="display: none">_FST</option>
                            <option value="11" class="department_option department_1" style="display: none">_ChE</option>
                            <option value="5" class="department_option department_5" style="display: none">_Ind</option>
                            <option value="6" class="department_option department_5" style="display: none">_Mé</option>
                            <option value="4" class="department_option department_3" style="display: none">_EE</option>
                            <option value="8" class="department_option department_3" style="display: none">_EA</option>
                            <option value="9" class="department_option department_3" style="display: none">_ET</option>
                            <option value="12" class="department_option department_6" style="display: none">_WRI</option>
                            <option value="14" class="department_option department_2" style="display: none">Materials Science and Structures</option>
                            <option value="17" class="department_option department_2" style="display: none">MS</option>
                            <option value="23" class="department_option department_18" style="display: none">MIT</option>
                            <option value="15" class="department_option department_1" style="display: none">Food Technology and Nutrition</option>
                            <option value="24" class="department_option department_18" style="display: none">FTN</option>
                            <option value="25" class="department_option department_18" style="display: none">MSS</option>
                            <option value="26" class="department_option department_18" style="display: none">WE</option>
                            <option value="27" class="department_option department_18" style="display: none">ETM</option>
                            <option value="22" class="department_option department_18" style="display: none">M-AIE</option>
                            <option value="21" class="department_option department_18" style="display: none">M-GIM</option>
                            <option value="20" class="department_option department_18" style="display: none">M-MT</option>
                            <option value="19" class="department_option department_18" style="display: none">M-WE</option>
                            <option value="18" class="department_option department_18" style="display: none">M-MS</option>
                            <option value="13" class="department_option department_6" style="display: none">_WEE</option>
                            <option value="38" class="department_option department_18" style="display: none">WAE</option>
                            <option value="49" class="department_option department_18" style="display: none">_MGCA</option>
                            <option value="46" class="department_option department_18" style="display: none">_MGCI</option>
                            <option value="47" class="department_option department_18" style="display: none">_MGEE</option>
                            <option value="45" class="department_option department_18" style="display: none">_MGIC</option>
                            <option value="50" class="department_option department_18" style="display: none">_MGIM</option>
                            <option value="48" class="department_option department_18" style="display: none">_MGRU</option>
                            <option value="51" class="department_option department_18" style="display: none">M-TE</option>
                            <option value="52" class="department_option department_18" style="display: none">M-WEE</option>
                            <option value="53" class="department_option department_18" style="display: none">M-AI</option>
                            <option value="54" class="department_option department_18" style="display: none">M-IM</option>
                            <option value="55" class="department_option department_18" style="display: none">M-ETM</option>
                            <option value="56" class="department_option department_5" style="display: none">ECAM</option>
                            <option value="57" class="department_option department_8" style="display: none">_AMS</option>
                            <option value="58" class="department_option department_8" style="display: none">_GTI</option>
                            <option value="59" class="department_option department_18" style="display: none">M-TIE</option>
                            <option value="60" class="department_option department_18" style="display: none">M-MSE</option>
                            <option value="61" class="department_option department_18" style="display: none">M-MIC</option>
                            <option value="63" class="department_option department_18" style="display: none">D-ETM</option>
                            <option value="64" class="department_option department_18" style="display: none">D-FTN</option>
                            <option value="65" class="department_option department_18" style="display: none">D-MIT</option>
                            <option value="66" class="department_option department_18" style="display: none">D-MSS</option>
                            <option value="67" class="department_option department_18" style="display: none">D-WAE</option>
                            <option value="68" class="department_option department_16" style="display: none">_ABE</option>
                            <option value="62" class="department_option department_18" style="display: none">M-ECS</option>
                            <option value="70" class="department_option department_22" style="display: none">_GTI</option>
                            <option value="71" class="department_option department_21" style="display: none">_GAR</option>
                            <option value="69" class="department_option department_19" style="display: none">ECAM_ROA</option>
                            <option value="28" class="department_option department_8" style="display: none">_GCA</option>
                            <option value="32" class="department_option department_8" style="display: none">_GGG</option>
                            <option value="35" class="department_option department_8" style="display: none">_GRU</option>
                            <option value="72" class="department_option department_5" style="display: none">ECAM_RA</option>
                            <option value="73" class="department_option department_5" style="display: none">ECAM_IESCM</option>
                            <option value="74" class="department_option department_19" style="display: none">ECAM_ISM</option>
                            <option value="75" class="department_option department_18" style="display: none">M-DAS</option>
                            <option value="76" class="department_option department_1" style="display: none">_TFS</option>
                            <option value="77" class="department_option department_2" style="display: none">_TCI</option>
                            <option value="79" class="department_option department_7" style="display: none">_TMG</option>
                            <option value="80" class="department_option department_5" style="display: none">_TIM</option>
                            <option value="81" class="department_option department_5" style="display: none">_TMT</option>
                            <option value="82" class="department_option department_3" style="display: none">_TMT</option>
                            <option value="84" class="department_option department_3" style="display: none">_TEA</option>
                            <option value="85" class="department_option department_6" style="display: none">_TWE</option>
                            <option value="83" class="department_option department_16" style="display: none">_TET</option>
                            <option value="30" class="department_option department_8" style="display: none">_GAR</option>
                            <option value="29" class="department_option department_8" style="display: none">_GCI</option>
                            <option value="31" class="department_option department_8" style="display: none">_GEE</option>
                            <option value="33" class="department_option department_8" style="display: none">_GIC</option>
                            <option value="34" class="department_option department_8" style="display: none">_GIM</option>
                            <option value="36" class="department_option department_8" style="display: none">_GTR</option>
                        </select>
                        <select class="" id="filter_semester" name="semester">
                            <option selected="selected" value="">Semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                        </select>
                        <select class="" id="filter_degree" name="degree">
                            <option selected="selected" value="">Degree</option>
                            <option value="1">Engineer</option><option value="2">Associate</option>
                            <option value="5">Doctoral</option><option value="4">Master</option>
                            <option value="3">Bachelor</option><option value="6">International</option>
                        </select>
                        <select class="" id="filter_grade" name="grade"><option selected="selected" value="">Year</option>
                            <option value="1">First Year</option>
                            <option value="2">Second Year</option>
                            <option value="3">Third Year</option>
                            <option value="4">Fourth Year</option>
                            <option value="5">Fifth Year</option>
                        </select>

                        </select>
                        <select id="filter_lecturer" name="lecturer" style="margin-top: 5px;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                            <option value="" selected="">Lecturer</option>
                            <option value="190">CHOU Chandary | ជូ ច័ន្ទដារី</option>
                            <option value="378">CHOUM Tival | ជុំ ទីវ៉ាល់</option>
                            <option value="275">CHUM Pharino | ជុំ ផារីណូ</option>
                            <option value="357">HENG Sokchhay | ហេង&nbsp;សុខឆាយ</option>
                            <option value="356">HANG Leakhéna | ហង្ស លក្ខិណា</option>
                            <option value="299">KRY Nallis | គ្រី ណាល់លីស</option>
                            <option value="366">OU Sothea | អ៊ូ សុធា</option>
                            <option value="355">DOUNG Ratha | ដួង រដ្ធា</option>
                            <option value="476">PAK Sothy | ប៉ាក់ សុធី</option>
                            <option value="353">CHOU Soklin | ជូ&nbsp;សុខលីន</option>
                            <option value="645">CHHAN Malin | CHHAN Malin</option>
                            <option value="317">CHUN Thavorac | ជុន​ ថាវរៈ</option>
                            <option value="674">UN Kenratanak | អ៊ុន⁣⁣ កេនរតនះ</option>
                            <option value="452">SIM Boly | ស៊ីម បូលី</option>
                            <option value="586">CHEA Sophea | ជា សុភា</option>
                            <option value="624">KHAN Ponnara | ខាន់ ប៉ុណ្ណារ៉ា</option>
                            <option value="647">JEONG Chul | JEONG Chul</option>
                            <option value="660">RATH THAVYMONY Annanda | RATH THAVYMONY Annanda</option>
                            <option value="635">SEAK Leng | សៀក ឡេង</option>
                            <option value="721">Khin Seanghak | ឃីន ស៊ាងហាក់</option>
                            <option value="926">Vey Soriya | Vey Soriya</option>
                        </select>
                        <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 408px;">
                        <span class="selection">
                            <span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-filter_lecturer-container">
                                <span class="select2-selection__rendered" id="select2-filter_lecturer-container">
                                </span>
                                <span class="select2-selection__arrow" role="presentation">
                                    <b role="presentation"></b>
                                </span>
                            </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true">
                            </span>
                        </span>
                        <div id="courseAnnuals-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"></div>
                    </div>
                    <div class="col-md-5">
                        <h3 class="text-center">Course Sessions</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 pt-2 in_left">
                        <div class="row ">
                            <div class="col-sm-6">
                               <div class="table_data">
                                    <label for="">
                                        Show
                                        <select name="" id="" class="px-2">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries
                                    </label>
                               </div>
                            </div>
                            <div class="col-sm-6 mr-0">
                                <div class="box2Right">
                                    <div class="search">
                                        <div class="container-input">
                                            <input type="text" placeholder="Search" name="text" class="input">
                                            <svg fill="black" width="15px" height="15px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-sm-12">
                                    <table class="table border table-striped mr-2 table-sm bg-light flex-column align-items-stretch">
                                        <thead>
                                            <tr>
                                                <th class="sorting_asc" style="width: 0.2px;" aria-label=""></th>
                                                <th style="width: 250px;">Name</th>
                                                <th class="sorting_asc" style="width: 0.2px;" aria-label=""></th>
                                                <th>Lecturer</th>
                                                <th class="sorting_asc" style="width: 0.2px;" aria-label=""></th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td  style="width: 10px;" class=""><img class="image_mark" src="https://dev.itc.edu.kh/img/arrow.png"></td>
                                                <td  style="width: 50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Advanced Computer Architecture</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>(C=32 | TD=0 | TP= 0)</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 190px; padding-left:50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            I3GCA <br> AB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">CHUN Thavorac</td>
                                                <td>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-disable-enable-scoring/8514?operation=no" class="btn btn-sm btn-xs btn-success toggle_scoring"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable Scoring"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-annual/8514/form-input-score-course-annual" class="btn btn-sm btn-xs btn-info input_score_course"><i class="fa fa-area-chart" data-toggle="tooltip" data-placement="top" title="" data-original-title="input score"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course_annual/8514/edit" class="btn btn-sm btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                    <button class="btn btn-sm btn-xs btn-danger btn-delete" data-remote="https://dev.itc.edu.kh/admin/course/course_annual/8514"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td  style="width: 10px;" class=""><img class="image_mark" src="https://dev.itc.edu.kh/img/arrow.png"></td>
                                                <td  style="width: 50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Physical Chemistry</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>(C=32 | TD=0 | TP= 0)</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 190px; padding-left:50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            I3GCA <br> AB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">CHUN Thavorac</td>
                                                <td>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-disable-enable-scoring/8514?operation=no" class="btn btn-sm btn-xs btn-success toggle_scoring"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable Scoring"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-annual/8514/form-input-score-course-annual" class="btn btn-sm btn-xs btn-info input_score_course"><i class="fa fa-area-chart" data-toggle="tooltip" data-placement="top" title="" data-original-title="input score"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course_annual/8514/edit" class="btn btn-sm btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                    <button class="btn btn-sm btn-xs btn-danger btn-delete" data-remote="https://dev.itc.edu.kh/admin/course/course_annual/8514"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td  style="width: 10px;" class=""><img class="image_mark" src="https://dev.itc.edu.kh/img/arrow.png"></td>
                                                <td  style="width: 50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Discrete Mathematics</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>(C=32 | TD=0 | TP= 0)</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 190px; padding-left:50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            I3GCA <br> AB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">CHUN Thavorac</td>
                                                <td>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-disable-enable-scoring/8514?operation=no" class="btn btn-sm btn-xs btn-success toggle_scoring"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable Scoring"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-annual/8514/form-input-score-course-annual" class="btn btn-sm btn-xs btn-info input_score_course"><i class="fa fa-area-chart" data-toggle="tooltip" data-placement="top" title="" data-original-title="input score"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course_annual/8514/edit" class="btn btn-sm btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                    <button class="btn btn-sm btn-xs btn-danger btn-delete" data-remote="https://dev.itc.edu.kh/admin/course/course_annual/8514"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td  style="width: 10px;" class=""><img class="image_mark" src="https://dev.itc.edu.kh/img/arrow.png"></td>
                                                <td  style="width: 50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Mathematical Modeling</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>(C=32 | TD=0 | TP= 0)</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 190px; padding-left:50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            I3GCA <br> AB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">CHUN Thavorac</td>
                                                <td>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-disable-enable-scoring/8514?operation=no" class="btn btn-sm btn-xs btn-success toggle_scoring"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable Scoring"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-annual/8514/form-input-score-course-annual" class="btn btn-sm btn-xs btn-info input_score_course"><i class="fa fa-area-chart" data-toggle="tooltip" data-placement="top" title="" data-original-title="input score"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course_annual/8514/edit" class="btn btn-sm btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                    <button class="btn btn-sm btn-xs btn-danger btn-delete" data-remote="https://dev.itc.edu.kh/admin/course/course_annual/8514"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td  style="width: 10px;" class=""><img class="image_mark" src="https://dev.itc.edu.kh/img/arrow.png"></td>
                                                <td  style="width: 50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Mathematical Modeling</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>(C=32 | TD=0 | TP= 0)</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 190px; padding-left:50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            I3GCA <br> AB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">CHUN Thavorac</td>
                                                <td>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-disable-enable-scoring/8514?operation=no" class="btn btn-sm btn-xs btn-success toggle_scoring"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable Scoring"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-annual/8514/form-input-score-course-annual" class="btn btn-sm btn-xs btn-info input_score_course"><i class="fa fa-area-chart" data-toggle="tooltip" data-placement="top" title="" data-original-title="input score"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course_annual/8514/edit" class="btn btn-sm btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                    <button class="btn btn-sm btn-xs btn-danger btn-delete" data-remote="https://dev.itc.edu.kh/admin/course/course_annual/8514"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td  style="width: 10px;" class=""><img class="image_mark" src="https://dev.itc.edu.kh/img/arrow.png"></td>
                                                <td  style="width: 20px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="text" style="font-size: 18px;  font-weight: bold; width:200px;">Object-Oriented Programming</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>(C=32 | TD=0 | TP= 0)</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 190px; padding-left:50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            I3GCA <br> AB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">CHUN Thavorac</td>
                                                <td>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-disable-enable-scoring/8514?operation=no" class="btn btn-sm btn-xs btn-success toggle_scoring"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable Scoring"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-annual/8514/form-input-score-course-annual" class="btn btn-sm btn-xs btn-info input_score_course"><i class="fa fa-area-chart" data-toggle="tooltip" data-placement="top" title="" data-original-title="input score"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course_annual/8514/edit" class="btn btn-sm btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                    <button class="btn btn-sm btn-xs btn-danger btn-delete" data-remote="https://dev.itc.edu.kh/admin/course/course_annual/8514"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td  style="width: 10px;" class=""><img class="image_mark" src="https://dev.itc.edu.kh/img/arrow.png"></td>
                                                <td  style="width: 50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span style="font-size: 18px;  font-weight: bold; width:200px">Professional Practice</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>(C=32 | TD=0 | TP= 0)</span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span>ឆមាសទី១ | ២០២២-២០២៣</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 190px; padding-left:50px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            I3GCA <br> AB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="2">CHUN Thavorac</td>
                                                <td>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-disable-enable-scoring/8514?operation=no" class="btn btn-sm btn-xs btn-success toggle_scoring"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable Scoring"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course-annual/8514/form-input-score-course-annual" class="btn btn-sm btn-xs btn-info input_score_course"><i class="fa fa-area-chart" data-toggle="tooltip" data-placement="top" title="" data-original-title="input score"></i></a>
                                                    <a href="https://dev.itc.edu.kh/admin/course/course_annual/8514/edit" class="btn btn-sm btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                    <button class="btn btn-sm btn-xs btn-danger btn-delete" data-remote="https://dev.itc.edu.kh/admin/course/course_annual/8514"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="courseAnnuals-table_info" role="status" aria-live="polite">Showing 1 to 25 of 778 entries</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="courseAnnuals-table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="courseAnnuals-table_previous"><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="0" tabindex="0">Previous</a></li>
                                        <li class="paginate_button active"><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="1" tabindex="0">1</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="2" tabindex="0">2</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="3" tabindex="0">3</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="4" tabindex="0">4</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="5" tabindex="0">5</a></li>
                                        <li class="paginate_button disabled" id="courseAnnuals-table_ellipsis"><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="6" tabindex="0">…</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="7" tabindex="0">32</a></li>
                                        <li class="paginate_button next" id="courseAnnuals-table_next"><a href="#" aria-controls="courseAnnuals-table" data-dt-idx="8" tabindex="0">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="course_session_message col-sm-12 box-body with-border text-muted well well-sm no-shadow btn-success mt-2" style="padding: 20px; min-height: 50px;">
                            <center><h4>Please select any course on the left.</h4></center>
                        </div>
                        <div class="course_session_wrapper" style="display: none;"></div>

                    </div>
                </div>
           </div>
    </div>
</body>
</html>
