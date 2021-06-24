<?php
    $conn = new mysqli("localhost", "root", "", "your db name");
  
    if ($conn->connect_error) {
      die("ERROR: Unable to connect: " . $conn->connect_error);
    }
    session_start();
    $sql = "INSERT INTO result(studname,ROllNo,EmailId,Exam1,Exam2,Exam3)VALUES ('{$_SESSION["name"]}','{$_SESSION["rn"]}','{$_SESSION["em"]}','{$_SESSION["exam1"]}','{$_SESSION["exam2"]}','{$_SESSION["exam3"]}')";

    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>