function submitForm() {
  var x = document.getElementById("timeInput").value;
  document.getElementById("insertForm").onsubmit = function (event) {
    event.preventDefault(); // Prevent form submission
    var formData = new FormData(this); // Get form data
    var xhr = new XMLHttpRequest(); // Create XMLHttpRequest object

    // Define function to handle response
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          document.getElementById("responseText").innerHTML = xhr.responseText;
        } else {
          document.getElementById("responseText").innerHTML =
            "Error occurred while processing the request.";
        }
      }
    };

    // Open and send the request
    xhr.open("POST", "bb.php", true);
    xhr.send(formData);
  };
}

