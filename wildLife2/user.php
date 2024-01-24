<?php

include("dbConnection.php");

if(isset($_POST["submit"])){
     
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $password = mysqli_real_escape_string($con, $_POST['password']);

     echo($email);
     echo($password);
   
     // Corrected SQL query
     $sql2 = "SELECT name, email FROM user;";
     $ret = mysqli_query($con, $sql2);
 
     if ($ret) {
        while ($record = mysqli_fetch_assoc($ret)) {
            echo "<pre>";
            print_r($record);
            echo "</pre>";
        }
    } else {
        echo "Error fetching data: " . mysqli_error($con);
    }
}

mysqli_close($con);

?>
