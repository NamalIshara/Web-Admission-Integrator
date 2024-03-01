<?php
// Establish connection to your MySQL database
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

// Retrieving form data
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$time1 = $_POST['time1'];
$time2 = $_POST['time2'];
$time3 = $_POST['time3'];
$time4 = $_POST['time4'];
$code1 = $_POST['code1'];
$code2 = $_POST['code2'];
$code3 = $_POST['code3'];
$code4 = $_POST['code4'];

// Update MySQL table
$sql = "UPDATE StudentsCourse3 SET Subject1='$subject1'";
$sql1 = "UPDATE StudentsCourse3 SET Subject2='$subject2'";
$sql2 = "UPDATE StudentsCourse3 SET Subject3='$subject3'";
$sql3 = "UPDATE StudentsCourse3 SET Subject4='$subject4'";
$sql4 = "UPDATE StudentsCourse3 SET SubTime1='$time1'";
$sql5 = "UPDATE StudentsCourse3 SET SubTime2='$time2'";
$sql6 = "UPDATE StudentsCourse3 SET SubTime3='$time3'";
$sql7 = "UPDATE StudentsCourse3 SET SubTime4='$time4'";
$sql8 = "UPDATE StudentsCourse3 SET SubCode1='$code1'";
$sql9 = "UPDATE StudentsCourse3 SET SubCode2='$code2'";
$sql10 = "UPDATE StudentsCourse3 SET SubCode3='$code3'";
$sql11 = "UPDATE StudentsCourse3 SET SubCode4='$code4'";


if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql3) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql4) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql5) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql6) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql7) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql7) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql8) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql9) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql10) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
if ($conn->query($sql11) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $conn->error;
}
// Close MySQL connection
$conn->close();

// Update HTML table

?>