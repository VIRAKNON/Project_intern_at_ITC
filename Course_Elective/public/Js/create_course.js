// Initialize Select2
$(document).ready(function() {
    $('#Coure_name').select2();
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


//
  $(document).ready(function() {
    // Get references to the select and input elements
    const selectPercentage = $("#selectPercentage");
    const inputValue = $("#inputValue");

    // Add event listener to the select element
    selectPercentage.on("change", function() {
      const selectedValue = parseInt(selectPercentage.val());

      // Set the input value based on the selected percentage
      if (selectedValue === 0) {
        inputValue.val(90);
      } else if (selectedValue === 30) {
        inputValue.val(60);
      } else if (selectedValue === 40) {
        inputValue.val(50);
      }
    });

    // Trigger the change event on page load to set initial input value
    selectPercentage.trigger("change");
  });

  // Initialize Select2
$(document).ready(function() {
    $('#Type_Course').select2();
  });
