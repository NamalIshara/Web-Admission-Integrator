<?php
// Database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ExamNum"] . "</td>";
        echo "<td>" . $row["St_Name"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["ExamDate"] . "</td>";
        // Add more columns if needed
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>