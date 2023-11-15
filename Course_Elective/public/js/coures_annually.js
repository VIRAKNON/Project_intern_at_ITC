$(document).ready(function() {
    $('#example').DataTable({
        "scrollY": "530px", // Set the container wrapper's height to 400 pixels
        "scrollCollapse": true // Enable scrollCollapse option
    });
});
$(document).ready(function() {//search in selection option by one length
    $("#filter_lecturer").select2({
      width: '410px', // Set the width as needed
      placeholder: "Lecturer",
      allowClear: true, // Enable the clear button
    });
  });

$(document).ready(function() {//search in selection option by 3 length
    $("#select_lecturer").select2({
      width: '230px', // Set the width as needed
      placeholder: "Enter name...",
      allowClear: true, // Enable the clear button
      minimumInputLength: 3 // Require at least 3 characters for searching
    });
  });

$(document).ready(function() {
    $('[data-bs-toggle="tooltip"]').tooltip();
  });

$(document).ready(function () {

    $("tbody tr").click(function () {
        $("#toggleForm").show();
        $('tbody tr').removeClass('selected');
        // Add the 'clicked' class to the clicked row
        $(this).addClass('selected');
    });
});
/////
$(document).ready(function() {
    const toggleButton = $('#toggleForm');
    const courseForm = $('#courseForm');

    toggleButton.click(function() {
        if (courseForm.hasClass('hidden')) {
            courseForm.removeClass('hidden');
            toggleButton.text('Add Course Session');
        } else {
            courseForm.addClass('hidden');
            toggleButton.text('Add Course Session');
        }
    });
});

$(document).ready(function () {
    let scoringEnabled = false;

    function toggleScoring() {
        scoringEnabled = !scoringEnabled;
        const button = $("#toggle-button");
        const icon = $("#icon");
        const status = $("#scoring-status");

        if (scoringEnabled) {
            button.removeClass("disabled").addClass("enabled");
            icon.removeClass("fa-toggle-off").addClass("fa-toggle-on");
            // Add your code to enable scoring for more data here
        } else {
            button.removeClass("enabled").addClass("disabled");
            icon.removeClass("fa-toggle-on").addClass("fa-toggle-off");
            // Add your code to disable scoring for more data here
        }
    }

    $("#toggle-button").on("click", function () {
        toggleScoring();
    });
});


$(document).ready(function() {
  // Hide the course_session_message initially
  $('#message').show();
  $('#courseForm').hide();

  // Click event handler for table rows
  $('.table-row').click(function() {
    $('#message').hide();
    $('#toggleForm').show();

    // Here, you can add code to populate the form with data
    // Replace the following with your data population logic
    $('#session_time_course').val('16');
    $('#select_lecturer').val('1');

    $('#courseForm').hide();
  });

  // Click event handler for #toggleForm button
  $('#toggleForm').click(function() {
    $('#courseForm').toggle();
  });

  // Click event handler for "Save" button
  $('#courseForm button[type="submit"]').click(function() {
    // Here, you can add code to save the form data
    // Replace the following with your data saving logic

    var courseTime = $('#session_time_course').val();
    var lecturer = $('#select_lecturer').val();
    $('#new_course').show();

    // Create a new todo item and append it to the todo list
    var todoItem = '<li>' +
      '<span class="handle ui-sortable-handle">' +
      '<i class="fa fa-ellipsis-v"></i>' +
      '<i class="fa fa-ellipsis-v"></i>' +
      '</span>' +
      '<span class="text">' + courseTime + ' | ' + lecturer + '</span>' +
      '<div class="tools float-end mx-2">' +
      '<svg width="17" height="17" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">' +
      '<path d="M3 6h18"></path>' +
      '<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>' +
      '<path d="M10 11v6"></path>' +
      '<path d="M14 11v6"></path>' +
      '</svg>' +
      '</div>' +
      '</li>';

    $('.todo-list').append(todoItem);

    // Clear the form fields
    $('#session_time_course').val('');
    $('#select_lecturer').val('');
  });
  $('#courseForm button[type="reset"]').click(function() {
    $('#courseForm').hide();
  });

  // Click event handler for delete button
  $(document).on('click', '.tools', function() {
    // Remove the parent li element when the delete button is clicked
    $(this).closest('li').remove();
  });
});

////////////////////////////////
$(document).ready(function() {
    // Event handler for "btn_disable_scoring"
    $("#btn_disable_scoring").on("click", function() {
        // Set all switches to checked
        $(".switch input[type='checkbox']").prop("checked", true);
    });

    // Event handler for "btn_enable_scoring"
    $("#btn_enable_scoring").on("click", function() {
        // Set all switches to unchecked
        $(".switch input[type='checkbox']").prop("checked", false);
    });
});
