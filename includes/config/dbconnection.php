<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "fuel_db";

//create connection 
$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}

?>