$(document).ready(function() {
    $("#filter_lecturer").select2({
      minimumInputLength: 1,  // Change this to 1
      placeholder: "Search for an option",
      templateSelection: function(data, container) {
        // If no data is selected, return the placeholder
        if (data.id === "") {
          return "Enter name ...";
        }

        // Otherwise, return the selected option with a delete icon and clear button
        return $('<span> </span>' + data.text + ' <span class="clear-selection"><i class="fas fa-times"></i></span>');
      }
    });

    // Clear selection when the clear button is clicked
    $(document).on("click", ".clear-selection", function(e) {
      e.stopPropagation();
      $("#filter_lecturer").val(null).trigger("change");
    });
  });

$(document).ready(function() {
    $("#select_lecturer").select2({
      minimumInputLength: 3,
      placeholder: "Search for an option",
      templateSelection: function(data, container) {
        // If no data is selected, return the placeholder
        if (data.id === "") {
          return "Enter name ...";
        }

        // Otherwise, return the selected option with a delete icon and clear button
        return $('<span> </span>' + data.text + ' <span class="clear-selection"><i class="fas fa-times"></i></span>');
      }
    });

    // Clear selection when the clear button is clicked
    $(document).on("click", ".clear-selection", function(e) {
      e.stopPropagation();
      $("#select_lecturer").val(null).trigger("change");
    });
  });
  
  $(document).ready(function() {
    $('[data-bs-toggle="tooltip"]').tooltip();
  });



//         var $search_url = "https://dev.itc.edu.kh/admin/employee-search";
//         var base_url = 'https://dev.itc.edu.kh/img/profiles';
//         var disable_scoring_url = "https://dev.itc.edu.kh/admin/course/course-mass-disable-scoring";
//         var enable_scoring_url = "https://dev.itc.edu.kh/admin/course/course-mass-enable-scoring";
//         var only_retake_scoring_url = "https://dev.itc.edu.kh/admin/course/course-mass-only-retake-scoring";
//         var current_course = null;
//         var search_employee_box = null;
//         $(function() {

//             var oTable = $('#courseAnnuals-table').DataTable({
//                     processing: true,
//                     serverSide: true,
//                     scrollY:  "90vh",
//                     scrollCollapse: true,
//                     pageLength: 25,
//                     deferLoading : true,
//                     ajax: {
//                         url:"https://dev.itc.edu.kh/admin/course/course-annual-data",
//                         type:"POST",
//                         data:function(d){
//                             // In case additional fields is added for filter, modify export view as well: popup_export.blade.php
//                             d.academic_year = $('#filter_academic_year').val();
//                             d.degree = $('#filter_degree').val();
//                             d.grade = $('#filter_grade').val();
//                             d.department = $('#filter_department').val();
//                             d.semester = $('#filter_semester').val();
//                             d.lecturer = $('#filter_lecturer').val();
//                             d.student_group = $('#filter_student_group').val();
//                             d.dept_option = $('#department_option_id').val();
//                         }
//                     },

//                     columns: [
//                         { data: 'mark', name:'mark', searchable:false, orderable:false},
//                         { data: 'name', name: 'course_annuals.name_en'},
//                         { data: 'employee_id', name: 'employee_id',searchable:false},
//                         { data: 'action', name: 'action',orderable: false, searchable: false}
//                     ]
//             });

//             enableDeleteRecord($('#courseAnnuals-table'));

//             $('#courseAnnuals-table tbody').on( 'click', 'td:first-child, td:nth-child(2),td:nth-child(3)', function (event) {
//                 if ($(this).closest('tr').hasClass('selected') ) {
//                     $(this).closest('tr').removeClass('selected');
//                     current_course = null;
//                     $(".course_session_message").show();
//                     $(".course_session_wrapper").hide();
//                 }
//                 else {
//                     oTable.$('tr.selected').removeClass('selected');
//                     $(this).closest('tr').addClass('selected');
//                     current_course = $(this).closest('tr').find('.course_id').html();

//                     $(".course_session_message").hide();
//                     $(".course_session_wrapper").show();
//                     load_session(current_course);
//                 }
//             });


// //            $('#filter_academic_year, #filter_degree, #filter_grade, #filter_department').on('change', function(e) {
// //                oTable.draw();
// //                e.preventDefault();
// //            });
//             $('#filter_academic_year').on('change', function(e) {

//                 oTable.draw();
//                 appendFilterGroupSeclection();
//                 e.preventDefault();
//             });

//             $('#filter_degree').on('change', function(e) {
//                 oTable.draw();
//                 appendFilterGroupSeclection();
//                 e.preventDefault();
//             });
//             $('#filter_grade').on('change', function(e) {
//                 oTable.draw();
//                 appendFilterGroupSeclection();
//                 e.preventDefault();
//             });
//             $('#filter_department').on('change', function(e) {
//                 oTable.draw();
//                 appendFilterGroupSeclection();
//                 //hasDeptOption();
//                 $(".department_option").hide();
//                 var department_id = $(this).val();
//                 $(".department_"+department_id).show();
//                 e.preventDefault();
//             });

//             $(document).ready(function() {
//                 if(val = $('#filter_department :selected').val()) {

//                     $(".department_option").hide();
//                     $(".department_"+val).show();
//                 }
//             });


//                         $('#filter_lecturer').on('change', function(e) {
//                 oTable.draw();
//                 e.preventDefault();
//             });

//             $('#filter_semester').on('change', function(e) {
//                 oTable.draw();
//                 e.preventDefault();
//             });

//             $(document).on('change', '#filter_student_group', function(e) {
//                 oTable.draw();
//                 e.preventDefault();
//             })

//             $(document).on('change', '#department_option_id', function(e) {
//                 oTable.draw();
// //                alert($(this).val());
//                 e.preventDefault();
//             });

//             oTable.draw();

//             $("#filter_lecturer").select2({
//                 placeholder: "Lecturer",
//                 allowClear: true
//             });

//             // ----------- Button disable/enable scoring -----------
//             $(document).on("click",".toggle_scoring", function(e){
//                 e.preventDefault();
//                 $.ajax({
//                     url: $(this).attr('href'),
//                     type: 'GET',
//                     success: function (response) {
//                         if(response.success){
//                             oTable.draw();
//                             notify("success","",response.message.toString());
//                         } else {
//                             notify("error","",response.message.toString());
//                         }

//                     }
//                 });

//             });

//             // diable multiple course
//             $("#btn_disable_scoring").on("click", function(e){
//                 $.ajax({
//                     url: disable_scoring_url,
//                     type: 'POST',
//                     data:{
//                         academic_year : $('#filter_academic_year').val(),
//                         degree : $('#filter_degree').val(),
//                         grade : $('#filter_grade').val(),
//                         department : $('#filter_department').val(),
//                         semester : $('#filter_semester').val(),
//                         lecturer : $('#filter_lecturer').val(),
//                         dept_option : $('#filter_dept_option').val()
//                     },
//                     success: function (response) {
//                         if(response.success){
//                             oTable.draw();
//                             notify("success","",response.message.toString());
//                         } else {
//                             notify("error","",response.message.toString());
//                         }

//                     }
//                 });
//             });
//             $("#btn_enable_scoring").on("click", function(e){
//                 $.ajax({
//                     url: enable_scoring_url,
//                     type: 'POST',
//                     data:{
//                         academic_year : $('#filter_academic_year').val(),
//                         degree : $('#filter_degree').val(),
//                         grade : $('#filter_grade').val(),
//                         department : $('#filter_department').val(),
//                         semester : $('#filter_semester').val(),
//                         lecturer : $('#filter_lecturer').val(),
//                         dept_option : $('#filter_dept_option').val()
//                     },
//                     success: function (response) {
//                         if(response.success){
//                             oTable.draw();
//                             notify("success","",response.message.toString());
//                         } else {
//                             notify("error","",response.message.toString());
//                         }

//                     }
//                 });
//             });
//             $("#btn_only_retake_scoring").on("click", function(e){
//               $.ajax({
//                 url: only_retake_scoring_url,
//                 type: 'POST',
//                 data:{
//                   academic_year : $('#filter_academic_year').val(),
//                   degree : $('#filter_degree').val(),
//                   grade : $('#filter_grade').val(),
//                   department : $('#filter_department').val(),
//                   semester : $('#filter_semester').val(),
//                   lecturer : $('#filter_lecturer').val(),
//                   dept_option : $('#filter_dept_option').val()
//                 },
//                 success: function (response) {
//                   if(response.success){
//                     oTable.draw();
//                     notify("success","",response.message.toString());
//                   } else {
//                     notify("error","",response.message.toString());
//                   }
//                 }
//                 });
//           });
//         });

//         function init_search_box(){
//             search_employee_box = $(".select_employee").select2({
//                 placeholder: 'Enter name ...',
//                 allowClear: true,
//                 tags: true,
//                 createTag: function (params) {
//                     return {
//                         id: params.term,
//                         name: params.term,
//                         group: 'customer',
//                         newOption: true
//                     }
//                 },
//                 ajax: {
//                     url: $search_url,
//                     dataType: 'json',
//                     delay: 250,
//                     data: function (params) {
//                         return {
//                             term: params.term || '', // search term
//                             page: params.page || 1
//                         };
//                     },
//                     cache: true
//                 },
//                 escapeMarkup: function (markup) {
//                     return markup;
//                 }, // let our custom formatter work
//                 minimumInputLength: 3,
//                 templateResult: formatRepoEmployee, // omitted for brevity, see the source of this page
//                 templateSelection: formatRepoSelectionEmployee, // omitted for brevity, see the source of this page
//             });
//         }

//         function edit_session(){

//         }

//         function delete_session(url){
//             $.ajax({
//                 type: 'DELETE',
//                 url: url,
//                 dataType:"json",
//                 success: function(resultData) {
//                     load_session(current_course);
//                 }
//             });
//         }

//         function load_session(current_course){

//             $.ajax({
//                 type: 'POST',
//                 url: "https://dev.itc.edu.kh/admin/course/course-session-data",
//                 data: {
//                     course_id:current_course
//                 },
//                 dataType: "html",
//                 success: function(resultData) {
//                     $(".course_session_wrapper").html(resultData);
//                     init_search_box();
//                     $('.btn_add_course_session').unbind('click').bind('click', function(){
//                         if($(".add_session_wrapper").is(":visible")){
//                             $(".add_session_wrapper").hide();
//                         } else {
//                             $(".add_session_wrapper").show();
//                         }
//                     });
//                     // Save course session
//                     $('.btn_save_course_session').unbind('click').bind('click', function(){
//                         $.ajax({
//                             type: 'POST',
//                             url: "https://dev.itc.edu.kh/admin/course/course_session",
//                             data: {
//                                 data:$(".form_add_session").serializeArray()
//                             },
//                             dataType: "html",
//                             success: function(resultData) {
//                                 load_session(current_course);
//                                 $(".add_session_wrapper").hide();
//                             }
//                         });
//                     });

//                     // Cancel course session
//                     $('.btn_cancel_course_session').unbind('click').bind('click', function(){
//                         $(".add_session_wrapper").hide();
//                     });

// //                    $('.btn_edit_course_session').unbind('click').bind('click', function(){
// //                        $(".add_session_wrapper").show();
// //                        $("input[name='time_course']").val($(this).data('time_course'));
// //                        $("input[name='time_td']").val($(this).data('time_td'));
// //                        $("input[name='time_tp']").val($(this).data('time_tp'));
// //                        search_employee_box.select2('data', {id:103, text:'ENABLED_FROM_JS'});
// //                    });

//                     $('.btn_delete_course_session').unbind('click').bind('click', function(){
//                         delete_session($(this).data("url"));
//                     });
//                 }
//             });
//         }

//         function hasDeptOption() {
//             var dept_option_url = 'https://dev.itc.edu.kh/admin/course/course-annual/dept-option';
//             var department_id = $('#filter_department :selected').val();

//             $.ajax({
//                 type: 'GET',
//                 url: dept_option_url,
//                 data: {department_id: department_id},
//                 dataType: "html",
//                 success: function(resultData) {

// //                    console.log(resultData);
//                     if($('#filter_dept_option').is(':visible')) {
//                         $('#filter_dept_option').html(resultData);
//                     } else {
//                         $("div.toolbar > select#filter_department").after(resultData);
//                     }

//                 }
//             });

//         }



//         function appendFilterGroupSeclection() {

//             var academic_year_id,degree_id,grade_id, department_id ;

//             academic_year_id = $('#filter_academic_year :selected').val();
//             degree_id = $('#filter_degree :selected').val();
//             grade_id  = $('#filter_grade :selected').val();

//                             department_id = $('#filter_department :selected').val();
//                         var baseData = {
//                 academic_year_id: academic_year_id,
//                 degree_id: degree_id,
//                 grade_id:grade_id,
//                 department_id:department_id
//             };

//             $.ajax({
//                 type: 'GET',
//                 url: 'https://dev.itc.edu.kh/admin/course/course-annual/get-student-group-selection',
//                 data: baseData,
//                 dataType: "html",
//                 success: function(resultData) {

// //                    console.log(resultData);
//                     if($('#filter_student_group').is(':visible')) {
//                         $('#filter_student_group').html(resultData);
//                     } else {
//                         $('div.toolbar').append(resultData);

//                         $('#filter_student_group').addClass('form-control')
//                     }

//                 }
//             });

//         }

//         $('#course_assignment').on('click', function() {

//             var academic_year_id = $('#filter_academic_year :selected').val();
//             var degree_id = $('#filter_degree :selected').val();
//             var grade_id  = $('#filter_grade :selected').val();
//             var department_option_id = $('#department_option_id :selected').val();
//             var semester_id = $('#filter_semester :selected').val();


//                             var department_id = $('#filter_department :selected').val();
//                         var department_name = $('#filter_department :selected').text();
//             var grade_name = $('#filter_grade :selected').text();
//             var degree_name = $('#filter_degree :selected').text();
//             var url = "https://dev.itc.edu.kh/admin/course/course-annual/course-assignment";

//             if(department_id) {
//                 var course_assignment_window = PopupCenterDual(url+'?department_id='+department_id+'&academic_year_id='+academic_year_id+'&degree_id='+degree_id+'&grade_id='+grade_id+'&department_option_id='+department_option_id + '&semester_id='+semester_id,'course assignment','1400','900');
//             } else {
//                 notify('error', 'Please Select Department', 'Attention')
//             }

//         });

//         $('#generate_course_annual').on('click', function() {

//             var url = "https://dev.itc.edu.kh/admin/course/course-annual/generate-course-annual";
//             var baseData = {
//                 academic_year_id: $('#filter_academic_year :selected').val(),
//                 degree_id : $('#filter_degree :selected').val(),
//                 grade_id: $('#filter_grade :selected').val(),
//                 department_id:$('#filter_department :selected').val()
//             };

//             swal({
//                 title: "Confirm",
//                 text: "Do you really want to generate courses??",
//                 type: "info",
//                 showCancelButton: true,
//                 confirmButtonColor: "#DD6B55",
//                 confirmButtonText: "Yes",
//                 closeOnConfirm: true
//             }, function(confirmed) {
//                 if (confirmed) {
//                     $.ajax({
//                         type: 'GET',
//                         url: url,
//                         data: baseData,
//                         dataType: "json",
//                         success: function(resultData) {
//                             if(resultData.status == true) {
//                                 notify('success', 'info', resultData.message);
//                                 oTable.draw();

//                             } else {
//                                 notify('error', 'info', resultData.message);
//                             }
//                         }
//                     });
//                 }
//             });
//         });

//         $(document).on('click', '#all_score_course_annual', function(e) {

//                                 var url_score = 'https://dev.itc.edu.kh/admin/course/course-annual/get-form-all-course-annual-score'
//             var height = $(window).height();
//             var width = $(window).width();

//             window.open(url_score,'_blank');


//             /*swal({
//                 title: "Attention",
//                 text: "Sorry We are working on this module now, so please wait!",
//                 type: "info",
//                 confirmButtonColor: "#DD6B55",
//                 confirmButtonText: "Yes",
//                 closeOnConfirm: true
//             }, function(confirmed) {
//                 if (confirmed) {

//                 }
//             });*/

//             /*
//                                         var baseData = {
//                             academic_year_id: $('#filter_academic_year :selected').val(),
//                             degree_id : $('#filter_degree :selected').val(),
//                             grade_id: $('#filter_grade :selected').val(),
//                             department_id:'',
//                             semester_id:$('#filter_semester :selected').val(),
//                             depatment_option_id: $('#department_option_id :selected').val(),
//                             group_name: $('#filter_student_group :selected').val()
//                         };
//                             var baseData = {
//                             academic_year_id: $('#filter_academic_year :selected').val(),
//                             degree_id : $('#filter_degree :selected').val(),
//                             grade_id: $('#filter_grade :selected').val(),
//                             department_id:$('#filter_department :selected').val(),
//                             semester_id:$('#filter_semester :selected').val(),
//                             depatment_option_id: $('#depatment_option_id :selected').val(),
//                             group_name: $('#filter_student_group :selected').val()
//                         };
//                         if(baseData.academic_year_id != null) {
//                 if(baseData.degree_id) {
//                     if(baseData.grade_id) {
//                         if(baseData.department_id) {

//                             window.location.replace(baseUrl+'?academic_year_id='+baseData.academic_year_id+
//                                             '&degree_id='+baseData.degree_id+
//                                             '&grade_id='+baseData.grade_id+
//                                             '&department_id='+baseData.department_id+
//                                             '&semester_id='+baseData.semester_id+
//                                             '&department_option_id='+baseData.depatment_option_id
//                             );

//                         } else {
//                             notify('error', 'Department Not Selected!!', 'info');
//                         }

//                     } else {
//                         notify('error', 'Grade Not Selected!!', 'info');
//                     }

//                 } else {
//                     notify('error', 'Degree Not Selected!!', 'info');
//                 }
//             }

//             */



//         })


//         $('#courseAnnuals-table').on('click', '.input_score_course', function(e) {
//             e.preventDefault();
// //            alert($(this).attr('href'));
//             var url = $(this).attr('href');
//             var baseData = {student_group: $(document).find('#filter_student_group').val()};
// //            console.log(baseData.student_group);
//             window.location.replace(url+'?student_group='+baseData.student_group);

//         })



