<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Download HTML Form as PDF</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <h1 style='margin-top:20px; color:#ff6700;'>Exam Informations</h1>

  <form action="examinfo1.php" method="POST" style='margin-left:140px;'>
    <label for="code1" style="font-size:20px; font-weight:550; padding: 10px; ">Subject code</label>
    <input type="text" id="code1" name="code1"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:100px;" />
    <label for="subject1" style="font-size:20px; font-weight:550; padding: 10px; ">Subject 01:</label>
    <input type="text" id="subject1" name="subject1"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:400px;" />
    <label for="time1" style="font-size:20px; font-weight:550; padding: 10px; ">Time 01:</label>
    <input type="text" id="time1" name="time1"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:100px;" /><br>

    <label for="code2" style="font-size:20px; font-weight:550; padding: 10px; ">Subject code</label>
    <input type="text" id="code2" name="code2"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:100px;" />
    <label for="subject2" style="font-size:20px; font-weight:550; padding: 10px; ">Subject 02:</label>
    <input type="text" id="subject2" name="subject2"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:400px;" />
    <label for="time2" style="font-size:20px; font-weight:550; padding: 10px; ">Time 02:</label>
    <input type="text" id="time2" name="time2"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:100px;" /><br>

    <label for="code3" style="font-size:20px; font-weight:550; padding: 10px;">Subject code</label>
    <input type="text" id="code3" name="code3"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:100px;" />
    <label for="subject3" style="font-size:20px; font-weight:550; padding: 10px; ">Subject 03:</label>
    <input type="text" id="subject3" name="subject3"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:400px;" />
    <label for="time3" style="font-size:20px; font-weight:550; padding: 10px; ">Time 03:</label>
    <input type="text" id="time3" name="time3"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:100px;" /><br>

    <label for="code4" style="font-size:20px; font-weight:550; padding: 10px; ">Subject code</label>
    <input type="text" id="code4" name="code4"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:10px; font-size:12px; color:gray; width:100px;" />
    <label for="subject4" style="font-size:20px; font-weight:550; padding: 10px; ">Subject 04:</label>
    <input type="text" id="subject4" name="subject4"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:10px; margin-bottom:5px; font-size:12px; color:gray; width:400px;" />
    <label for="time4" style="font-size:20px; font-weight:550; padding: 10px;">Time 04:</label>
    <input type="text" id="time4" name="time4"
      style="padding:8px 20px; border:3px solid #ff6700; border-radius:5px; margin-top:5px; margin-bottom:20px; font-size:12px; color:gray; width:100px;" /><br>
    <input type="submit" value="Submit"
      style="font-size:15px;padding:15px 60px; background-color:#ff6700; color:white; border:none; font-weight:550; border-radius:5px; margin-top:20px; margin-bottom:20px; margin-left: 500px;">
  </form>

  <form id="updateForm" method="POST">
    <label for=" dateInput" style="font-size:20px; font-weight:550; padding: 10px; ">Enter Exam Date:</label>
    <input type="date" id="dateInput" name="dateInput"
      style="padding:10px 30px; border:3px solid #ff6700; border-radius:5px; margin-top:20px; margin-bottom:10px; font-size:14px; color:gray; " />
    <label for="timeInput"
      style="font-size:20px; font-weight:550; padding: 10px; margin-left: 20px; margin-bottom: 40px; ">Enter Exam
      Time:</label>
    <input type="text" id="timeInput" name="timeInput"
      style="padding:10px 30px; border:3px solid #ff6700; border-radius:5px; margin-top:20px; margin-bottom:10px; font-size:14px; color:gray; " />

    <input type="submit" onclick="submitDTime();" value="Submit"
      style="font-size:15px;padding:12px 40px; background-color:#ff6700; color:white; border:none; font-weight:550; border-radius:5px; margin-top:20px; margin-bottom:20px; margin-left: 20px;" />
  </form>
  <script>
    function submitDTime() {
      var date = document.getElementById("dateInput").value;
      var time = document.getElementById("timeInput").value;

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "update.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // Request was successful
            console.log(xhr.responseText);
          } else {
            // Error handling
            console.error('Error:', xhr.statusText);
          }
        }
      };
      xhr.send("date=" + date + "&time=" + time);
    }
  </script>


  <table id="data_table" border="2" style="border-collapse:collapse; font-size:16px; margin-left:12px;">
    <thead>
      <tr>
        <th style='padding:10px; background-color:lightgray; '>Exam Number</th>
        <th style='padding:10px; background-color:lightgray;'>NIC</th>
        <th style='padding:10px; background-color:lightgray;'>Student Name</th>
        <th style='padding:10px; background-color:lightgray;'>Certificate</th>
        <th style='padding:10px; background-color:lightgray;'>Qualification Level</th>
        <th style='padding:10px; background-color:lightgray;'>Medium</th>
        <th style='padding:10px; background-color:lightgray;'>Date</th>

        <!-- Add more columns if needed -->
      </tr>
    </thead>
    <tbody>
      <!-- Table data will be populated dynamically -->
    </tbody>

    <?php
    $servername = "localhost:3307";
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password
    $database = "test"; // Your MySQL database name
    
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from MySQL table
    $sql = "SELECT * FROM StudentsCourse1";


    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='padding:5px 10px;'>" . $row["ExamNum"] . "</td>";
        echo "<td>" . $row["NIC"] . "</td>";
        echo "<td>" . $row["St_Name"] . "</td>";
        echo "<td>" . $row["Certificate"] . "</td>";
        echo "<td>" . $row["Course"] . "</td>";
        echo "<td>" . $row["Medium"] . "</td>";
        echo "<td>" . $row["ExamDate"] . "</td>";
        // Add more columns if needed
        echo "</tr>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </table>

  <script>

    function downloadForm(formId) {
      // Get the HTML form element
      var formElement = document.getElementById(formId);

      // Set the background color of the entire page (including whitespace)


      // Create an instance of html2pdf
      var opt = {
        marginLeft: 1,
        filename: "form_data.pdf",
        image: { type: "jpeg", quality: 5.00 },
        html2canvas: { scale: 6 },
        jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
      };

      html2pdf().set(opt).from(formElement).save();
    }


    function downloadAll() {
      var test = document.getElementById("clickAllBtn");
      var downloadButtons = document.getElementsByClassName("download-btn");
      for (var i = 0; i < downloadButtons.length; i++) {
        downloadButtons[i].click();
      }
    };
  </script>

  <?php
  // Database connection
  $servername = "localhost:3307";
  $username = "root"; // Your MySQL username
  $password = ""; // Your MySQL password
  $database = "test"; // Your MySQL database name
  
  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Fetch data from MySQL table
  $sql = "SELECT * FROM StudentsCourse1";


  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Output a form for each row in the table
    while ($row = $result->fetch_assoc()) {
      $formId = "myForm_" . $row['ExamNum'];
      echo "<div class='form-container' id='$formId'>";
      echo "<form method='post'> ";
      echo "<table border='2px' >";
      echo "<tr >";
      echo "<th colspan='4' >";
      echo "<h1> EXAM ADMISSION SHEET" . "</h1>";
      echo "</th>";
      echo "</tr>";
      // Iterate through columns and generate input fields   
      foreach ($row as $key => $value) {
        if ($key != 'id') { // Exclude ID column
          if ($key === 'ExamNum') {
            echo "<tr>";
            echo "<td for='$key' class='$key'>Exam Number</td>";
            echo "<td><input type='text' id='$key' name='$key' class='$key-input' value='$value'></td>";
          }
          if ($key === 'NIC') {
            echo "<td for='$key' class='$key' style='width:20px;'>NIC No.</td>";
            echo "<td><input type='text' id='$key' name='$key' class='$key-input' value='$value'></td>";
            echo "</tr>";
          } elseif ($key === 'St_Name') {

            echo "<tr>";
            echo "<td  for='$key' class='$key'>Name of the Applicant</td>";
            echo "<td colspan='3'><input type='text' id='$key' name='$key' class='$key-input' value='$value'></td>";
            echo "</tr>";

          } elseif ($key === 'Certificate') {
            echo "<tr>";
            echo "<td for='$key' class='$key'>Certificate  </td>";
            echo "<td ><input type='text' id='$key' name='$key' class='$key-input' style='border:none; font-weight:none; width:250px;' value='$value in {$row['Course']}'/></td>";

          } elseif ($key === 'Medium') {
            echo "<td for='$key' class='$key'>Medium</td>";
            echo "<td><input type='text' id='$key' name='$key' class='$key-input' style='border:none;' value='$value' ></td>";
            echo "</tr>";

          } elseif ($key === 'ExamDate') {
            echo "<tr>";
            echo "<td for='$key' class='$key' >Exam Date</td>";
            echo "<td><input type='text' id='$key' name='$key' class='$key-input' value='$value' style='border:none;'></td>";

          } elseif ($key === 'ExamTime') {
            echo "<td for='$key' class='$key' >Time</td>";
            echo "<td ><input type='text' id='$key' name='$key' class='$key-input' value='$value' style='border:none;'></td>";
            echo "</tr>";
          }
        }
      }

      echo "<tr><td>Exam Center</td>";
      echo "<td colspan='3' style='font-weight:500; font-size:13px; padding-left:8px;'>Faculty of Graduate Studies,University of colombo,<br>
       Prof,Stanly Wijesundara Mawatha,Colombo 07</td></tr>";
      echo "<tr><td>Hall Number</td>";
      echo "<td colspan='3' style='font-weight:500; font-size:13px; padding-left:8px;'>5th Floor,Main Exam Hall</td></tr>";
      echo "<tr><td style='padding-top:8px; padding-bottom:8px; width:50px;'>Candidate's Signature</td>";
      echo "<td style='font-weight:500; font-size:13px;'></td>";
      echo "<td>Examiners's Signature</td>";
      echo "<td style='font-weight:500; font-size:13px;'></td></tr>";
      echo "</table>";

      echo "<hr style='border:2px solid black; margin-top:11px; margin-bottom:11px;'>";


      echo "<table border='1' id='seTable' class='se-Table'>";
      echo "<tr><th style='width:30px;'>No</th><th style='width:38px; font-size:13px; padding:2px 0px;'>Subject Code</th><th colspan='5' style='width:80px;'>Subject</th><th style='width:60px;'>Date</th><th style='width:90px;'>Time</th></tr>";

      echo "<tr>";
      echo "<td style='font-weight:600; text-align:center;'>1</td>";
      echo "<td id='code1' style='font-weight:500; text-align:center;'>" . $row['SubCode1'] . "</td>";
      echo "<td id='subject1'" . "Data' colspan='5' style='font-size:12px; max-width:200px; word-wrap: break-word; padding-top:5px;'>" . $row['Subject1'] . "</td>";
      echo "<td style='text-align:center;'>" . $row['ExamDate'] . "</td>"; // Assuming ExamDate is fetched from somewhere
      echo "<td id='time1' style='text-align:center;'>" . $row['SubTime1'] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td style='font-weight:600; text-align:center;'>2</td>";
      echo "<td id='code2' style='font-weight:500; text-align:center;'>" . $row['SubCode2'] . "</td>";
      echo "<td id='subject2'" . "Data' colspan='5' style='font-size:12px; max-width:200px; word-wrap: break-word; padding-top:5px;'>" . $row['Subject2'] . "</td>";
      echo "<td style='text-align:center;'>" . $row['ExamDate'] . "</td>"; // Assuming ExamDate is fetched from somewhere
      echo "<td id='time1' style='text-align:center;'>" . $row['SubTime2'] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td style='font-weight:600; text-align:center;'>3</td>";
      echo "<td id='code3' style='font-weight:500; text-align:center;'>" . $row['SubCode3'] . "</td>";
      echo "<td id='subject3'" . "Data' colspan='5' style='font-size:12px; max-width:200px; word-wrap: break-word; padding-top:5px;'>" . $row['Subject3'] . "</td>";
      echo "<td style='text-align:center;'>" . $row['ExamDate'] . "</td>"; // Assuming ExamDate is fetched from somewhere
      echo "<td id='time3' style='text-align:center;'>" . $row['SubTime3'] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td style='font-weight:600; text-align:center;'>4</td>";
      echo "<td id='code4' style='font-weight:500; text-align:center;'>" . $row['SubCode4'] . "</td>";
      echo "<td id='subject4'" . "Data' colspan='5' style='font-size:12px; max-width:200px; word-wrap: break-word; padding-top:5px;'>" . $row['Subject4'] . "</td>";
      echo "<td style='text-align:center;'>" . $row['ExamDate'] . "</td>"; // Assuming ExamDate is fetched from somewhere
      echo "<td id='time1' style='text-align:center;'>" . $row['SubTime4'] . "</td>";
      echo "</tr>";
      echo "<tr><td style='width:1px; font-size:13px; font-weight:550; background-color:lightgray; text-align:center;'>Subject</td><td style='width:30px; background-color:lightgray; text-align:center; font-weight:550;'>" . $row['SubCode1'] . "</td>";
      echo "<td style='width:30px; font-weight:550; background-color:lightgray; text-align:center;'>" . $row['SubCode2'] . "</td><td style='width:30px; font-weight:550; background-color:lightgray; text-align:center;'>" . $row['SubCode3'] . "</td>";
      echo "<td style='width:30px; font-weight:550; background-color:lightgray; text-align:center;'>" . $row['SubCode4'] . "</td><td style='width:27px; background-color:lightgray;'></td><td style='width:27px; background-color:lightgray;'></td><td style=width:35px; colspan='2' rowspan='2'></td></tr>";
      echo "<tr><td style='background-color:lightgray; font-size:13px; font-weight:550; text-align:center; padding:2px 2px;'>Particip<br>ated</td><td style='background-color:lightgray;></td><td style='background-color:lightgray;></td><td style='background-color:lightgray;'></td><td style='background-color:lightgray;'></td><td style='background-color:lightgray;'></td><td style='background-color:lightgray;'></td><td style='background-color:lightgray;'></td></tr>";
      echo "</table>";

      echo "<div style='padding-left:15px;'>";
      echo "<p style='font-weight:600; text-decoration:underline; font-style:italic; margin-top:14px; margin-bottom:5px;'>Examination Procedure</p>";
      echo "<ol><li>Candidates are required to be at the examination hall at least 40 minutes before the <br> commencement of each paper, but shall not enter the hall until they are requested to do <br> so by the Supervisor.</li>";
      echo "<li>Wear the Suitable Dress.</li><li>Seats are reserved only for students who are eligible to the exam.</li>";
      echo "<li>Candidates shall bring their own pens, erasers, pencils or any other approved which have <br> been instructed to bring.</li>";
      echo "<li>Leave all sheets (also blank) to the exam supervisors.</li><li>Note! Do not discuss with other students.</li>";
      echo "<li>Transparent water bottle can be brought if you needed.</li><li>Transparent pencil cases are also allowed to bring.</li><li>Sit down on the exam row according to the seating order.</li>";
      echo "<li>The exam investigator will give the permission to start the examination.</li>";
      echo "<li>Not Allowed Mobile Phones and Calculators to using the exam hall.</li>";
      echo "<li>A student who withdraws or absent himself / herself from the examination shall not be <br> eligible for the Graduation and next examination unless the management decides otherwise.</li>";
      echo "</div>";

      echo "<hr style='border:2px solid black; margin-top:8px; margin-bottom:6px;'>";
      echo "<p style='font-weight:600; font-size:14px; text-align:center;'>STUDENTS SHOULD BRING FOLLOWING DOCUMENTS TO OBTAIN THE EXAM ADMISSION.</p>";
      echo "</form>";

      echo "<br>";
      echo "</div>";
      echo "<button type='button' class='download-btn' style='font-size:15px; font-weight:550; margin-left:650px;' onclick='downloadForm(\"$formId\")'>
                    Download
                  </button>";
    }
  } else {
    echo "0 results found";
  }
  echo "<br><button type='button' id='clickAllBtn' onclick='downloadAll();' style='font-size:15px; font-weight:550; padding:18px 80px; border:none; background-color:#ff6700; border-radius:5px; color:white; margin:50px 600px;'>Download All</button>";
  $conn->close();
  ?>

  <script src="Script/submit.js"></script>
  <script src="Script/form.js"></script>
  <script src="script.js"></script>
  </div>
  </body>

</html>