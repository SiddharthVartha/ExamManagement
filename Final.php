<?php
 include('res.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
    <style>
        body{
            margin: 0px;
			padding: 0px;
			background-image: url("https://freepikpsd.com/media/2019/10/exam-png-Transparent-Images.png");
			background-repeat: no-repeat;
			background-size: cover;
        }
        h1{
            font-size: 50px;
            color:cyan;
            animation:header 5s linear infinite;
        }
        @keyframes header{
            0% {letter-spacing:normal; 
            }
            50% {letter-spacing:10px;
                color:gold;
                font-size: 60px;
                }
            100%{
                letter-spacing:normal;
            }    
        }
        div{
            background-color: black;
            border-radius: 20px;
            margin-top: 20px;
            opacity: 0.7;
            width: 500px;
            height: 500px;
        }
        p{
            font-weight: bold;
            font-size: 40px;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <center>
    <div>
        <h1>YOUR SCORE</h1>
        <br>
        <br>
        <p>
            <?php
                $conn = new mysqli("localhost", "root", "", "your db name");
                $sql = "SELECT 	Exam1,Exam2,Exam3 FROM result where RollNO='{$_SESSION['rn']}'";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "Exam1: " . $row["Exam1"]."<br>Exam2: " . $row["Exam2"]. "<br>Exam3: " . $row["Exam3"]. "";
                  } else {
                    echo "OHH NO something went wrong :(";
                  }
            ?>
        </p>        
    </div>
</center>
</body>
</html>