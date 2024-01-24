<?php

include("dbConnection.php");

if(isset($_POST["update"])){
     // Assuming you have a form with fields named "name", "email", "password", "registerno", "location"
     $name = mysqli_real_escape_string($con, $_POST['name']);
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $password = mysqli_real_escape_string($con, $_POST['password']);
     $registerno = mysqli_real_escape_string($con, $_POST['registerno']);
     $location = mysqli_real_escape_string($con, $_POST['location']); 
    
     // SQL query to update data
     $sql3 = "UPDATE user SET email='$email', password='$password', registerno='$registerno', location='$location' 
                WHERE name='$name'";
 
     // Execute the query
     $result = mysqli_query($con, "$sql3");
 
     if ($result) {
         echo "Data updated successfully!";
     } else {
         echo "Error updating data: " . mysqli_error($con);
     }
}

// Close the database connection
mysqli_close($con);

?>
