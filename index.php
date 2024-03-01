<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button Content Demo</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="Css/style.css" />
  <style>
    * {
      font-family: Arial, Helvetica, sans-serif;
    }

    .title-container {
      background-image: url(Img/home-background.jpg);
    }

    .form-container {
      /* height: 720px;
      padding-right: 20px;
      margin: 0; */
    }

    .header {
      height: 40px;
      font-size: 4px;
      border: 1px solid black;
      background-color: #808090;
    }

    .ExamNum-input {
      border: none;
    }

    .num-container {
      border: 1px solid black;
      padding: 0px 411px 14px 20px;
    }

    .St_Name-input {
      border: none;
    }

    .form-container {
      display: flex;
      justify-content: center;
      margin-right: 200px;
      padding-top: 50px;
      width: 100%;
      height: 1004px;
      /* border: 1px solid black; */
      margin-bottom: 20px;/
    }

    .form-container table {
      font-weight: 600;
      border: 1px solid black;
      width: 700px;
      border-collapse: collapse;
      align-items: center;
      background-color: white;
    }

    .form-container th {
      /* padding: 10px; */
      text-align: center;
      font-size: 8px;
      background-color: #d3d3d3;
    }

    .form-container th h1 {
      margin: 0;
      padding-top: 6px;
      padding-bottom: 6px;
    }

    .form-container td {
      font-size: 14px;
      padding: 4px;
    }

    /* Style for the input fields */
    .form-container input[type="text"] {
      width: 100%;
      padding: 5px;
      box-sizing: border-box;
    }

    /* Style for the second column (Name of the Applicant) */
    .form-container td.St_Name {
      width: 25%;
    }

    /* Style for the third column (Certificate) */
    .form-container td.Certificate {
      width: 25%;
    }

    /* Style for the fourth column (Exam Date) */
    .form-container td.Exam_Date {
      width: 25%;
    }

    .se-Table th {
      font-size: 14px;
    }

    .se-Table td {
      font-weight: 500;
      padding: 5px;
    }

    .NIC-input {
      border: none;
    }

    ol li {
      padding-bottom: 6px;
      font-size: 14px;
    }

    .btn1 {
      padding: 40px 80px;
      height: 120px;
      font-size: 20px;
      font-weight: 600;
      color: white;
      background-color: #ff6700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .btn2 {
      margin-left: 20px;
      padding: 40px 90px;
      height: 120px;
      font-size: 20px;
      font-weight: 600;
      color: white;
      background-color: #ff6700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .btn3 {
      margin-left: 20px;
      padding: 40px 90px;
      height: 120px;
      font-size: 20px;
      font-weight: 600;
      color: white;
      background-color: #ff6700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .btn4 {
      padding: 40px 90px;
      font-size: 20px;
      height: 120px;
      font-weight: 600;
      color: white;
      background-color: #ff6700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .btn-container {
      padding: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>

</head>

<body>
  <!--navbar-->
  <div class="nav-container">
    <nav class="navbar">
      <img src="Img/logo-alt.png" class="logo" />
      <ul class="navbar-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#courses">Courses</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="#contact-cta">Contact</a></li>
        <li><a href="exam.html">Exams</a></li>
      </ul>
    </nav>
  </div>

  <!--Title-->
  <div>
    <div class="title-container">
      <h2 class="title">Create Exam</h2>
    </div>
  </div>

  <body>

    <div>
      <h1>Choose a Course</h1>
      <div class="btn-container">
        <button class="btn1" onclick="loadContent('test.php')"> Diploma in Psychology<br> and Counselling </button>
        <button class="btn2" onclick="loadContent('test2.php')">Diploma in Law</button>
        <button class="btn3" onclick="loadContent('test3.php')">Course 3</button>
      </div>
    </div>



    <div id="contentContainer">
      <!-- Content will be inserted here -->
    </div>

    <script>
      function loadContent(src) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              document.getElementById("contentContainer").innerHTML = xhr.responseText;
            } else {
              console.error('Failed to load content: ' + xhr.status);
            }
          }
        };
        xhr.open('GET', src, true);
        xhr.send();
      }
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

  </body>

</html>