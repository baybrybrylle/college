$(document).ready(function() {
  var validSubmissions = [];
  var invalidSubmissions = [];

  
  $("#myForm").on("submit", function(event) {
    event.preventDefault(); 

    $("#nameError, #emailError, #passwordError, #successMessage").html('');

    var formData = {
      name: $("#name").val(),
      email: $("#email").val(),
      password: $("#password").val(),
    };

    $.ajax({
      url: "server.php", 
      type: "POST",
      data: formData,
      success: function(response) {
        var data = JSON.parse(response);
        console.log("Response from server:", data);

        if (data.errors) {
          var errorMessage = 'Name: ' + formData.name + ', Email: ' + formData.email;
          invalidSubmissions.push(errorMessage);
          updateTables();

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

        if (data.success) {
          var successMessage = 'Name: ' + formData.name + ', Email: ' + formData.email;
          validSubmissions.push(successMessage);
          updateTables();

          $("#successMessage").html(data.success);
          $("#myForm")[0].reset();
        }
      },
      error: function(xhr, status, error) {
        console.log("AJAX Error: ", error);
      }
    });
  });

  function updateTables() {
    console.log("Updating table...");

    $("#validSubmissions").html(validSubmissions.map(function(entry) {
      return '<p>' + entry + '</p>';
    }).join(''));

    $("#invalidSubmissions").html(invalidSubmissions.map(function(entry) {
      return '<p>' + entry + '</p>';
    }).join(''));
  }
});
