<?php

if (isset($_POST["submit"])) {
    //access the dbconnection and functions php
    require_once 'dbconnection.php';
    require_once 'functions.php';

    //saves inputs into local vars
    $gallons = $_POST["GalReq"];
    
    //function to check if user left empty fields
    if(emptyInputGallons($gallons) !== false){
        header("location: ../../Fuel_Req_Form.php?error=emptyinput");
        exit();
    }

    $proposedgallons = fuelCalc($con, $gallons);
    echo $proposedgallons;
    exit();
}
else 
{
    header("location: ../../Fuel_Req_Form.php");
    exit();
}


?>