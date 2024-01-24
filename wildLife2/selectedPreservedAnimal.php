<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Nav.css">
    <title>Contact</title>
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
                <a href="Hotelbooking.html">Leave Form</a>
                <a href="Heritage.html">Gallery</a>
                <a href="contact.html">Contact</a>
            </div>
        </div>
    </header>

    <?php
        include("dbConnection.php");

        if (isset($_POST["show"])) {
            $sql2 = "SELECT * FROM preservedanimal";
            $ret = mysqli_query($con, $sql2);

            if ($ret) {
                echo "<h2>Preserved Animal  Data</h2>";
                echo "<table>";
                echo "<tr><th>NAME</th><th>SCIENTIFIC NAME</th><th>QUANTITY</th><th>SOCIAL BEHAVIORS</th></tr>";

                while ($record = mysqli_fetch_assoc($ret)) {
                    echo "<tr>";
                    echo "<td>".$record['name']."</td>";
                    echo "<td>".$record['scientificname']."</td>";
                    echo "<td>".$record['quantity']."</td>";
                    echo "<td>".$record['socialbehavior']."</td>";
                    
                    

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
