<?php
  $conn = new mysqli("localhost", "root", "", "your db name");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  }
  session_start();
  $exam3=$_POST['hide'];
  $_SESSION["exam3"] = $exam3; 
?>
<html>
    <head>
        <style>
            body{
                margin-top:100px;
                color:white;
                background-color:black;
            }
            a{
                color: black;
 		        text-decoration:none;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>CHOOSE NEXT EXAM</h1>
        <button><a href="exam1.html">Exam1</a></button>
        <button><a href="exam2.html">Exam2</a></button>
        <h2>IF ALL COMPLETED CLICK TO VIEW SCORE</h2>
        <button><a href="http://localhost/your_foldername/Final.php">VIEW</a></button>
        </center>
    </body>      
</html> 