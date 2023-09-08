<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

                         <!-- Include Select2 CSS -->
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

                        <!-- Include jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <!-- Include Select2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/createCourse.css')}}">
    <script src="{{asset('js/coures_annually.js')}}"></script>

    <title></title>
</head>
<body>
    <div class="container-fluid bg-light">
        <header class="py-2">
            <span class="fs-3">Course Annually</span>
            <span class="px-3 ">Detail of an course</span>
        </header>

        <div class="content">
            <div class="p-2 px-3 lead">
                <span>Create new general/elective course</span>
            </div>
            <div class="container">
                <div class="w-100">
                    <div class="row mb-3">
                        <label for="Coure_name" class="col-2 form-label col-form-label-md text-end fw-bolder">Cource Name <sup>*</sup></label>
                        <div class="col-sm-6">
                            <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="Coure_name" required="">
                                <option value="" disabled selected>Select a course program</option>
                                <optgroup label="TC">
                                    <option value="1178" time_course="32" time_tp="0" time_td="0" name_kh="ទស្សនវិជ្ជា" name_en="Philosophy" name_fr="Phylosophie" credit="2" dept="8" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | Philosophy
                                    </option>
                                    <option value="1179" time_course="0" time_tp="96" time_td="0" name_kh="បារាំង" name_en="French" name_fr="Français" credit="3" dept="8" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | French
                                    </option>
                                    <option value="2039" time_course="32" time_tp="0" time_td="32" name_kh="គណិតគណនាវគ្គ១" name_en="Calculus I" name_fr="Analyse I" credit="3" dept="8" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | Calculus I
                                    </option>
                                </optgroup>
                                <optgroup label="SF">
                                    <option value="1734" time_course="96" time_tp="0" time_td="0" name_kh="ភាសាបារាំងឆ្នាំទី១" name_en="French I1-A1" name_fr="Français I1-A1" credit="3" dept="13" grade="1" degree="1" dept_option="" semester="1" responsible_department_id="">
                                        I1-S1 | French I1-A1
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lacturer" class="col-2 form-label col-form-label-md text-end fw-bolder">Lecturer</label>
                        <div class="col-sm-6">
                            <select name="" id="select_lecturer" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value=""></option>
                                <option value="1">Ava</option>
                                <option value="2">Liam</option>
                                <option value="3">Noah</option>
                                <option value="4">Olivia</option>
                                <option value="5">Ava</option>
                                <option value="6">Jackson</option>
                                <option value="7">Emma</option>
                                <option value="8">Isabella</option>
                                <option value="9">Lucas</option>
                                <option value="10">Isabella</option>
                                <option value="11">Aiden</option>
                                <option value="12">Mia</option>
                                <option value="13">Oliver</option>
                                <option value="14">Amelia</option>
                                <option value="15">Ethan</option>
                                <option value="16">Harper</option>
                                <option value="17">Caden</option>
                                <option value="18">Evelyn</option>
                                <option value="19">Abigail</option>
                                <option value="20">Mason</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="acaYear" class="col-2 form-label col-form-label-md text-end fw-bolder">Academic Year <sup>*</sup></label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="acaYear" required>
                                <option value="2023">២០២២-២០២៣</option>
                                <option value="2022">២០២១-២០២២</option>
                                <option value="2021">២០២០-២០២១</option>
                                <option value="2020">២០១៩ - ២០២០</option>
                                <option value="2019">២០១៨ - ២០១៩</option>
                                <option value="2018">២០១៧ - ២០១៨</option>
                                <option value="2017">២០១៦-២០១៧</option>
                                <option value="2016">២០១៥-២០១៦</option>
                                <option value="2015">២០១៤-២០១៥</option>
                                <option value="2014">២០១៣-២០១៤</option>
                                <option value="2013">២០១២-២០១៣</option>
                                <option value="2012">២០១១-២០១២</option>
                                <option value="2011">២០១០-២០១១</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="semester" class="col-2 form-label col-form-label-md text-end fw-bolder">Semester <sup>*</sup></label>
                        <div class="col-sm-7">
                            <select  name="" id="semeter" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>Semester</option>
                                <option value="1">ឆមាសទី១</option>
                                <option value="1">ឆមាសទី២</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="degree" class="col-2 form-label col-form-label-md text-end fw-bolder">Degree<sup>*</sup></label>
                        <div class="col-sm-7">
                            <select  name="" id="degree" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>Degree</option>
                                <option value="1">វិស្វករ</option>
                                <option value="2">បរិញាប័ត្ររងវិស្វកម្ម</option>
                                <option value="3">ប​ណ្ឌិត​</option>
                                <option value="4">បរិញាប័ត្រជាន់ខ្ពស់</option>
                                <option value="5">បរិញាប័ត្ររងវិស្វកម្ម</option>
                                <option value="6">អន្តរជាតិ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="grade" class="col-2 form-label col-form-label-md text-end fw-bolder">grade <sup>*</sup></label>
                        <div class="col-sm-10">
                            <select  name="" id="grade" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>grade</option>
                                <option value="1">ឆ្នាំទី១</option>
                                <option value="1">ឆ្នាំទី២</option>
                                <option value="1">ឆ្នាំទី៣</option>
                                <option value="1">ឆ្នាំទី៤</option>
                                <option value="1">ឆ្នាំទី៥</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <label for="department" class="col-2 form-label col-form-label-md text-end fw-bolder">Department <sup>*</sup></label>
                        <div class="col-sm-4">
                            <select  name="" id="department" class="form-select form-select-sm form-comtrol shadow-none">
                                <option value="" disabled selected>Department</option>
                                <option value="20">AMS</option>
                                <option value="21">GAR</option>
                                <option value="1">GCA</option>
                                <option value="2">GCI</option>
                                <option value="3">GEE</option>
                                <option value="7">GGG</option>
                                <option value="4">GIC</option>
                                <option value="5">GIM</option>
                                <option value="6">GRU</option>
                                <option value="18">GS</option>
                                <option value="22">GTI</option>
                                <option value="16">GTR</option>
                                <option value="19">IME</option>
                                <option value="17">OAC</option>
                                <option value="12">SA</option>
                                <option value="13">SF</option>
                                <option value="8">TC</option>
                            </select>
                        </div>
                        <label for="department" class="col-2 form-label col-form-label-md text-end fw-bolder">Option</label>
                        <div class="col-sm-4">
                            <select class="form-control form-control-sm  shadow-none" id="department_option_id" name="department_option_id">
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
                            <option value="16" class="department_option department_6" style="display: none">WE</option>
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
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">
                            <div class="form-check float-end">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Group
                                </label>
                              </div>
                        </div>
                </div>
                <div class="row mb-3">
                    <label for="Time_course" class="col-2 form-label col-form-label-md text-end fw-bolder">Time Course <sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="number"  class="form-control form-control-sm shadow-none" name="" id="Time_course" style="width: 70%;">
                    </div>
                    <label for="credit" class="col-2 form-label col-form-label-md text-end fw-bolder">Credit<sup>*</sup></label>
                    <div class="col-4">
                        <input class="form-control form-control-sm  shadow-none" type="text" name="credit" id="credit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Time_TP" class="col-2 form-label col-form-label-md text-end fw-bolder">Time TP <sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="number"  class="form-control form-control-sm shadow-none" name="" id="Time_TP" style="width: 70%;">
                    </div>
                    <label for="Name_khmer" class="col-2 form-label col-form-label-md text-end fw-bolder">Name Khmer </label>
                    <div class="col-4">
                        <input class="form-control form-control-sm  shadow-none" type="text" name="credit" id="Name_khmer">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Time_TD" class="col-2 form-label col-form-label-md text-end fw-bolder">Time TD <sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="number"  class="form-control form-control-sm shadow-none" name="" id="Time_TD" style="width: 70%;">
                    </div>
                    <label for="credit" class="col-2 form-label col-form-label-md text-end fw-bolder">Name English</label>
                    <div class="col-4">
                        <input class="form-control form-control-sm shadow-none" type="text" name="credit" id="credit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name_fr" class="col-lg-8 col-form-label-md fw-bolder  text-end control-label ">Name French</label>
                    <div class="col-sm-4">
                        <input class="form-control form-control-sm shadow-none" type="text" name="" id="name_fr">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Scoring" class="col-2 form-label col-form-label-md text-end fw-bolder">Scoring <sup>*</sup></label>
                    <div class="col-lg-10">
                        <div class="box box-solid" style="border-top: 1px solid #d2d6de" id="scoring_panel">
                            <div class="box-header with-border d-flex">
                                <div class="col-md-6 col-xs-6">
                                    <label for="normal_scoring_panel" class="control-label fw-bolder" style="font-size: 18px">
                                        Normal Scoring
                                        <input onclick="toggleVisible('#normal_scoring_panel', this)" id="normal_scoring" name="normal_scoring" value="checked" type="checkbox" >
                                    </label>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <label for="competency_scoring_panel" style="float:left; font-size: 18px" class="control-label fw-bolder">
                                        Competency Scoring (SA/SF Section)
                                         <input onclick="toggleVisible('#competency_scoring_panel', this)" name="competency_scoring" value="checked" id="competency_scoring" type="checkbox">
                                    </label>
                                </div>
                            </div>
                            <div class="box-body" style="padding:10px 0 0 0">
                                <div class="col-md-7 col-xs-7">
                                    <div class="normal_scoring_panel">
                                        <div class="row mt-2">
                                            <label for="having_resitted" data-toggle="tooltip" data-placement="top" title="" class="col-lg-12  text-end control-label required" data-original-title="When you allow student to take supplementary of this course. You must check this option for enabling the inputing score of this subject!">
                                                 Allow Resit
                                                  <input id="having_resitted" type="checkbox" name="is_having_resitted" style="font-size: 18pt" value="1"><span style="color: red"> *</span>
                                            </label>
                                        </div>
                                        <div class="row mt-2">
                                            <label for="transcript" data-toggle="tooltip" data-placement="top" title="" class="col-lg-12  text-end control-label required" data-original-title="When you allow student to take supplementary of this course. You must check this option for enabling the inputing score of this subject!">
                                                Credit For Transcript
                                                  <input id="transcript" type="checkbox" name="is_having_resitted" style="font-size: 18pt" value="1"><span style="color: red"> *</span>
                                            </label>
                                        </div>
                                        <div class="row mt-2">
                                            <label for="absence" data-toggle="tooltip" data-placement="top" title="" class="col-lg-12  text-end control-label required" data-original-title="When you allow student to take supplementary of this course. You must check this option for enabling the inputing score of this subject!">
                                                10%-Absence
                                                  <input id="absence" type="checkbox" name="is_having_resitted" style="font-size: 18pt" value="1"><span style="color: red"> *</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="selectPercentage" class="col-sm-5 form-label fw-bolder control-label text-end">Mitdterm Score <sup>*</sup></label>
                                        <div class="col-sm-7">
                                            <select class="form-select form-select-sm form-control shadow-none" id="selectPercentage">
                                                <option value="0">0%</option>
                                                <option value="30" selected>30%</option>
                                                <option value="40">40%</option>
                                              </select>
                                        </div>
                                      </div>
                                        <div class="row mt-3 mb-3">
                                            <label for="inputValue" class="col-sm-5 form-label form-label-md fw-bolder control-label col-sm-5 text-end required">Final Score <sup>*</sup></label>
                                            <div class="col-sm-7">
                                                <input type="number" class="form-control form-control-sm shadow-none" id="inputValue" min="0" max="100" required="required" disabled>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-6 col-xs-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-">
                    <label for="Permit" class="col-2 form-label col-form-label-md text-end fw-bolder">Permit responsibility to</label>
                    <div class="col-sm-3">
                        <select class="form-control form-select-sm form-comtrol shadow-none" id="Permit" name="responsible_department_id">
                            <option selected="selected" value="">Department</option>
                            <option value="20">AMS</option>
                            <option value="21">GAR</option>
                            <option value="1">GCA</option>
                            <option value="2">GCI</option>
                            <option value="3">GEE</option>
                            <option value="7">GGG</option>
                            <option value="4">GIC</option>
                            <option value="5">GIM</option>
                            <option value="6">GRU</option>
                            <option value="18">GS</option>
                            <option value="22">GTI</option>
                            <option value="16">GTR</option>
                            <option value="19">IME</option>
                            <option value="17">OAC</option>
                            <option value="12">SA</option>
                            <option value="13">SF</option>
                            <option value="8">TC</option>
                        </select>
                    </div>
                    <label for="Type_Course" class="col-4 form-label col-form-label-md text-end fw-bolder">Type Course </label>
                    <div class="col-3">
                        <select class="form-select form-select-sm form-comtrol shadow-none" name="" id="Type_Course">
                            <option value="">General Course</option>
                            <option value="">Elective Course</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
            <div class="box box-success mt-5">
                <div class="box-body">
                    <div class="pull-left">
                        <a href="" class="btn btn-danger btn-xs">Cancel</a>
                    </div>
                    <div class="pull-right">
                        <button type="sumite" id="submit_form" class="btn btn-success btn-xs">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
