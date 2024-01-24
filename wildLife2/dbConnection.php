<?php
    

    // Create connection
    $con =mysqli_connect("localhost","root","");
    if(!$con){
        die("Sorry !, could not connect:".mysql_error());
    }
    else{
       echo "Connection is sucsessful!";

    }

    //connect database
        $db =mysqli_select_db($con,"wildlife") or
        die("not selected");    
            
    //close database
      


?>
