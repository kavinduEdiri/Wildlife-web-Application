<?php

include("dbConnection.php");
echo "Leave data form is working 82222";

$name = $_POST["name"];
$registerno = $_POST["registerno"];
$designation = $_POST["designation"];
$reason = $_POST["reason"];

// Add Data
if (isset($_POST["add"])) {
    $sql8 = "INSERT INTO `leave` (name, registerno, designation, reason) 
            VALUES ('$name', '$registerno', '$designation', '$reason')";

    $ret = mysqli_query($con, $sql8);

    if (!$ret) {
        die("Data entry failed: " . mysqli_error($con));
    } else {
        echo "Data entry successful!";
    }
}

mysqli_close($con);

?>
