<?php

if(isset($_POST['name']))
{
    $server ="localhost";
    $username = "root";
    $password = "";
    $dbname = "trip";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $gender= $_POST['gender'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $desc = $_POST['desc']; 
    $phone= $_POST['phone'];

    $sql = "SELECT * FROM `trip` WHERE `email` = '$email'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // alert user that email already exists
        echo '<script>alert("This email already exists!");</script>';
    } else {
        // insert new record into database
        $sql = "INSERT INTO  `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
        if ($con->query($sql) === TRUE) {
            echo '<script>alert("Inserted Successfully!");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css">
    <title>Welcome to Travel Form</title>
</head>
<body> 
    <img class="bg" src="bg.png" alt="Chandigarh University">
       <div class="container">
            <h1>Welcome to Chandigarh University US trip Form</h1>
            <p>Enter your details to confirm your participation in Trip</p>
            
      <form action="project.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
        <input type="email" name="email" id="email" placeholder="Enter your E-mail">
        <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any query"></textarea>
        <button class="btn">Submit</button>
     
      </form>
       </div>

<script src="index.js"></script>
</body>
</html>
