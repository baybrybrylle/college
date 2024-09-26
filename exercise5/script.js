$(document).ready(function() {
  var validSubmissions = [];
  var invalidSubmissions = [];

  // Form submission handler
  $("#myForm").on("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Clear previous error messages
    $("#nameError, #emailError, #passwordError, #successMessage").html('');

    // Capture form data
    var formData = {
      name: $("#name").val(),
      email: $("#email").val(),
      password: $("#password").val(),
    };

    // AJAX request to validate data
    $.ajax({
      url: "server.php", // Server-side script URL
      type: "POST",
      data: formData,
      success: function(response) {
        var data = JSON.parse(response); // Parse JSON response
        console.log("Response from server:", data);

        // Handle validation errors
        if (data.errors) {
          var errorMessage = 'Name: ' + formData.name + ', Email: ' + formData.email;
          invalidSubmissions.push(errorMessage); // Add to invalid submissions array
          updateTables(); // Update the submission tables

          if (data.errors.name) {
            $("#nameError").html(data.errors.name);
          }
          if (data.errors.email) {
            $("#emailError").html(data.errors.email);
          }
          if (data.errors.password) {
            $("#passwordError").html(data.errors.password);
          }
        }

        // Handle successful submission
        if (data.success) {
          var successMessage = 'Name: ' + formData.name + ', Email: ' + formData.email;
          validSubmissions.push(successMessage); // Add to valid submissions array
          updateTables(); // Update the submission tables

          $("#successMessage").html(data.success);
          $("#myForm")[0].reset(); // Clear the form
        }
      },
      error: function(xhr, status, error) {
        console.log("AJAX Error: ", error);
      }
    });
  });

  // Function to update the valid and invalid submissions table
  function updateTables() {
    console.log("Updating table...");

    // Update valid submissions
    $("#validSubmissions").html(validSubmissions.map(function(entry) {
      return '<p>' + entry + '</p>';
    }).join(''));

    // Update invalid submissions
    $("#invalidSubmissions").html(invalidSubmissions.map(function(entry) {
      return '<p>' + entry + '</p>';
    }).join(''));
  }
});
