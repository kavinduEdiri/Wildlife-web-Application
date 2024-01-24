<?php


include("dbConnection.php");

if(isset($_POST["delete"])){
    
    $name = mysqli_real_escape_string($con, $_POST['name']);

    
    $sql = "DELETE FROM preservedanimal WHERE name='$name'";

    
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data deleted successfully!";
    } else {
        echo "Error deleting data: " . mysqli_error($con);
    }
    
}



// Close the database connection
mysqli_close($con);

?>
