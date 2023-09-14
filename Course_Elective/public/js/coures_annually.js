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
// $(document).ready(function() {
//     $('#example').DataTable({
//         "scrollY": "350px", // Set the container wrapper's height to 400 pixels
//         "scrollCollapse": true // Enable scrollCollapse option
//     });
// });
