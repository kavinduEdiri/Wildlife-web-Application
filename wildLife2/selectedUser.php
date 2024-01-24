<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Nav.css">
    <title>Contact</title>
    <style>
       
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
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
    <header>
        <div class="topnav">
            <img class="logo" src="Resources/logo.png">
            <div class="topnav-right">
                <a class="active" href="home.html">Home</a>
                <a href="user.html">User</a>
                <a href="administrativeWork.html">Administrative Work</a>
                <a href="Hotelbooking.html">Hotel Booking</a>
                <a href="Heritage.html">Gallery</a>
                <a href="contact.html">Contact</a>
            </div>
        </div>
    </header>

    <?php
        include("dbConnection.php");

        if (isset($_POST["show"])) {
            $sql2 = "SELECT * FROM user";
            $ret = mysqli_query($con, $sql2);

            if ($ret) {
                echo "<h2>User Data</h2>";
                echo "<table>";
                echo "<tr><th>NAME</th><th>EMAIL</th><th>PASSWORD</th><th>REGISTER NO</th><th>LOCATION</th></tr>";

                while ($record = mysqli_fetch_assoc($ret)) {
                    echo "<tr>";
                    echo "<td>".$record['name']."</td>";
                    echo "<td>".$record['email']."</td>";
                    echo "<td>".$record['password']."</td>";
                    echo "<td>".$record['registerno']."</td>";
                    echo "<td>".$record['location']."</td>";
                    // Add more columns as needed

                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "Error fetching data: " . mysqli_error($con);
            }
        }
    ?>
</body>
</html>
