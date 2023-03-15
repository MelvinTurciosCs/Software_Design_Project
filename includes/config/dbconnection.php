<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "fuel_db";

//create connection 
$con = mysqli_connect($serverName, $userName, $password, $dbName);

if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
echo "Connection success"

?>