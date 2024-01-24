<?php

include("dbConnection.php");

if (isset($_POST["submit"])) {
    echo "code section is working<br>";

    $email = $_POST["email"];
    $password = $_POST["password"];
 
    echo $email . "<br>";
    echo $password . "<br>";
 
    // Use prepared statements to prevent SQL injection
    $sql2 = "SELECT email, password FROM user WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($con, $sql2);
 
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
 
    // Check if a record is found
    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "Login successful";
        include 'animalDashboard.html';
    } else {
        echo "Login failed";
    }
 
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}

?>
