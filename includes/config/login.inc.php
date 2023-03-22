<?php

if (isset($_POST["submit"])) {
    //access the dbconnection and functions php
    require_once 'dbconnection.php';
    require_once 'functions.php';

    //saves inputs into local vars
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    //function to check if user left empty fields
    if(emptyInputLogin($username, $password) !== false){
        header("location: ../../Login.php?error=emptyinput");
        exit();
    }

    loginUser($con, $username, $password);
}
else 
{
    header("location: ../../Login.php");
    exit();
}


?>