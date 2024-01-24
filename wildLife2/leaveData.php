<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
    <style>
         body {
            max-width: 100vw;
            margin: 5px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #00b894;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
include("dbConnection.php");

if(isset($_POST["show"])){
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    
    $sql = "SELECT * FROM `leave` WHERE name='$name'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<h2>Data retrieved successfully!</h2>";

        echo "<table>";
        echo "<tr><th>NAME</th><th>REGISTER NO</th><th>DESIGNATION</th><th>REASON</th></tr>";

        while($record = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$record['name']."</td>";
            echo "<td>".$record['registerno']."</td>";
            echo "<td>".$record['designation']."</td>";
            echo "<td>".$record['reason']."</td>";
            // Repeat the above line for each additional column in your table

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Error retrieving data: " . mysqli_error($con);
    }
    
}

// Close the database connection
mysqli_close($con);
?>

</body>
</html>
