<?php

if (isset($_POST["submit"])) {
    //access the dbconnection and functions php
    require_once 'dbconnection.php';
    require_once 'functions.php';

    //saves inputs into local vars
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    
    //function to check if user left empty fields
    if(emptyInputSignup($username, $password, $pwdrepeat) !== false){
        header("location: ../../register.php?error=emptyinput");
        exit();
    }

    //if user inputted invalid username
    if(invalidUid($username) !== false){
        header("location: ../../register.php?error=invaliduid");
        exit();
    }

    //if the password did not match
    if(pwdMatch($password, $pwdrepeat) !== false){
        header("location: ../../register.php?error=passwordnotmatch");
        exit();
    }

    //user name already exists in database
    if(uidExists($con, $username) !== false){
        header("location: ../../register.php?error=usernametaken");
        exit();
    }

    //creates the user
    createUser($con, $username, $password);


}
else 
{
    header("location: ../../Login.php");
}



?>