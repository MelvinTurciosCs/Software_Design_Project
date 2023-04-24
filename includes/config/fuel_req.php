<?php

if (isset($_POST["submit"])) {
    //access the dbconnection and functions php
    require_once 'dbconnection.php';
    require_once 'functions.php';

    //saves inputs into local vars
    $Tprice = $_POST["total_price"];
    $user_id = $_SESSION["useruid"];
    $delv_date =  $_POST["delv_date"];
    $ccpm = $_POST["ccpm"];
    $req_Gals = $_POST["request_Gals"];
    $Sugg_Price = $_POST["Sugg_Price"];
    $delv_Address = $_POST["delv_Address"];


    insert_Order($con, $Tprice, $user_id, $delv_date, $ccpm, $req_Gals, $Sugg_Price, $delv_Address);


}
else 
{
    header("location: ../../Fuel_Req_Form.php");
    exit();
}


?>





