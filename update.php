<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get date and time values from POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both date and time values are provided
    if (isset($_POST["date"]) && isset($_POST["time"])) {
        // Retrieve date and time values from the POST request
        $date = $_POST["date"];
        $time = $_POST["time"];

        // Sanitize the input (to prevent SQL injection)
        $date = mysqli_real_escape_string($conn, $date);
        $time = mysqli_real_escape_string($conn, $time);

        // Your SQL update query to update the date and time in the table
        $sql = "UPDATE students SET ExamDate = '$date', ExamTime = '$time'"; // Adjust WHERE clause as per your requirement

        // Execute the query
        if (mysqli_query($conn, $sql)) {
            // Query executed successfully
            echo "Record updated successfully";
        } else {
            // Error occurred while executing the query
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        // If date or time values are not provided
        echo "Date and time values are required";
    }
} else {
    // If request method is not POST
    echo "Invalid request method";
}


$conn->close();
?>