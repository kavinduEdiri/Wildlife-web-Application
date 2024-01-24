<?php

   include("dbConnection.php");

    $name =$_POST["name"];
    $email =$_POST["email"];
    $password =$_POST["password"];
    $registerno =$_POST["registerno"];
    $location =$_POST["location"];

    // Add Data===================================================================
    if(isset($_POST["add"])){
        $sql ="insert into user(name,email,password,registerno,location) 
                values('$name','$email','$password','$reisterno','$location')" ;
        
        $ret = mysqli_query($con,"$sql");
        
        if(!$ret){
            die("data enter is Failed!");
        }
        else{
            echo "data enter is sucsessful!" ;
        }
        
    }
?>
    