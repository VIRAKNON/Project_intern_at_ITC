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



  ///////////////////
$(document).ready(function () {
    $("tbody").click(function () {
        // Show the "Add Course Sessions" button when a table row is clicked
        $("#toggleForm").show();
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

// scroll data
$(document).ready(function() {
    $('#example').DataTable({
        "scrollY": "530px", // Set the container wrapper's height to 400 pixels
        "scrollCollapse": true // Enable scrollCollapse option
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

    $('#courseForm').show();
  });

  // Click event handler for #toggleForm button
  $('#toggleForm').click(function() {
    $('#courseForm').toggle();
  });

  // Click event handler for "Save" button
  $('#courseForm button[type="button"]').click(function() {
    // Here, you can add code to save the form data
    // Replace the following with your data saving logic

    var courseTime = $('#session_time_course').val();
    var lecturer = $('#select_lecturer').val();

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

  // Click event handler for delete button
  $(document).on('click', '.tools', function() {
    // Remove the parent li element when the delete button is clicked
    $(this).closest('li').remove();
  });
});

