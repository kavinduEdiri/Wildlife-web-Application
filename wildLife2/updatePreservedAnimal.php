<?php

include("dbConnection.php");

if (isset($_POST["update"])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $scientificname = mysqli_real_escape_string($con, $_POST['scientificname']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $socialbehavior = mysqli_real_escape_string($con, $_POST['socialbehavior']);

   
    $sql = "UPDATE preservedanimal SET scientificname='$scientificname', quantity='$quantity', socialbehavior='$socialbehavior' 
            WHERE name='$name'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data updated successfully!";
    } else {
        echo "Error updating data: " . mysqli_error($con);
    }
}


mysqli_close($con);

?>
