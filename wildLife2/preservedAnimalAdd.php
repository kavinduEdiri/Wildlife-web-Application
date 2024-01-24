<?php

   include("dbConnection.php");

    $name =$_POST["name"];
    $scientificname =$_POST["scientificname"];
    $quantity =$_POST["quantity"];
    $socialbehavior =$_POST["socialbehavior"];
    

    // Add Data===================================================================
    if(isset($_POST["add"])){
        $sql ="insert into preservedanimal(name,scientificname,quantity,socialbehavior) 
                values('$name','$scientificname','$quantity','$socialbehavior')" ;
        
        $ret = mysqli_query($con,"$sql");
        
        if(!$ret){
            die("data enter is Failed!");
        }
        else{
            echo "data enter is sucsessful!" ;
        }
        
    }
?>
    