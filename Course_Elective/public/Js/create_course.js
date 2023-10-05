$(document).ready(function() {
    // Initialize Select2
    $("#Coure_name").select2({
      placeholder: "Select a course program",
      allowClear: true, // Enable the clear button

    });
  });

  $(document).ready(function() {
    // Initialize Select2 with search functionality and a minimum input length of 3 characters
    $("#select_lecturer").select2({
      placeholder: "Enter name...",
      width: '610px', // Set the width as needed
      allowClear: true, // Enable the clear button
      minimumInputLength: 3 // Require at least 3 characters for searching
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

