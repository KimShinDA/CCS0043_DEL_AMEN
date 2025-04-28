<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Del Amen | Resume</title>
  <!-- External File for CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- External File for JS -->
  <script src="script.js"></script>
  
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Variable Declaration | PHP -->
    <?php
    // Header
        $lname = "DEL AMEN";
        $fname = "KIM SHIN";
        $Minitial = "E";
        $address = "Address: Bulacan, Philippines";
        $contactNo = "Contact No.: +63 9656912338";
        $email = "Email: 202312025@fit.edu.ph";

    // Objectives
        $objectives = "I plan to use the knowledge and experience I have garnered to make an impact in terms of growth for the company and its success.";
    
    // Academic Background
        $jhs = "Muzon Harmony Hills High School (S.Y. 2017 - 2021)";
        $shs = "STI College of San Jose Del Monte (S.Y. 2021 - 2023)";
        $college = "FEU Institute of Technology (S.Y. 2023 - Current)";
    
    // Soft Skills
    $softSkills = array("Collaborative Teamwork", "Organizational Excellence", "Creative Problem-Solving", "Flexibility and Adaptability", "Effective Time Management", "Strong Communication Skills");

    // Hard Skills
    $hardSkills = array("C++", "CSS", "Java", "HTML", "Basic C#", "Basic Python", "Basic Networking", "Basic JavaScript and JQuery", "Database Management System");


    ?>
  <div class="container">
    <!-- Header -->
    <div class="header">
      <div>
        <h1><?= $lname,  ", ", $fname, " ", $Minitial, "."; ?></h1>
        <p><?= $address; ?></p>
        <p><?= $contactNo; ?></p>
        <p><?= $email; ?></p>
      </div>
      <img src="ID_PIC.jpg" alt="2x2 Picture">
    </div>

    <!-- Objective -->
    <div>
      <h5 class="section-title">OBJECTIVE:</h5>
      <p><?= $objectives; ?></p>
    </div>

    <!-- Academic Background -->
    <div>
      <h5 class="section-title">ACADEMIC BACKGROUNDS:</h5>
      <p><strong>Junior High School:</strong> <?= $jhs; ?> </p>
      <p><strong>Senior High School:</strong> <?= $shs; ?> </p>
      <p><strong>College:</strong> <?= $college; ?> </p>
    </div>

    <!-- Skills -->
    <div>
      <h5 class="section-title">SOFT SKILLS:</h5>
      <ul>
        <li> <?= $softSkills[0]; ?> </li>
        <li> <?= $softSkills[1]; ?> </li>
        <li> <?= $softSkills[2]; ?> </li>
        <li> <?= $softSkills[3]; ?> </li>
        <li> <?= $softSkills[4]; ?> </li>
        <li> <?= $softSkills[5]; ?> </li>
      </ul>

      <h5 class="section-title">HARD SKILLS:</h5>
      <ul>
        <li> <?= $hardSkills[0]; ?> </li>
        <li> <?= $hardSkills[1]; ?> </li>
        <li> <?= $hardSkills[2]; ?> </li>
        <li> <?= $hardSkills[3]; ?> </li>
        <li> <?= $hardSkills[4]; ?> </li>
        <li> <?= $hardSkills[5]; ?> </li>
        <li> <?= $hardSkills[6]; ?> </li>
        <li> <?= $hardSkills[7]; ?> </li>
        <li> <?= $hardSkills[8]; ?> </li>
      </ul>
    </div>

    <!-- Dark Mode Button -->
    <button id="toggle-button" onclick="toggleMode()">Switch to Dark Mode</button>
  </div>
</body>
</html>