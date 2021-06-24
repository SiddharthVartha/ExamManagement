  <?php
  $conn = new mysqli("localhost", "root", "", "your db name");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';
   session_start();
   $name=$_POST['name'];
   $rn=$_POST['rno'];
   $em=$_POST['Email1'];
   $_SESSION["name"] = $name;
   $_SESSION["rn"] = $rn;
   $_SESSION["em"] = $em;
  ?> 
