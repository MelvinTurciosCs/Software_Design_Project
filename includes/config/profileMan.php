<?php

    session_start(); //This is used to access the global variable for userid

    $_SESSION["useruid"]; //This is the call to the user id 


if(isset($_POST["submit"])){

    //saves inputs into local vars
    $cpm = $_POST["cpm"];
    $name = $_POST["name"];
    $address_1 = $_POST["address_1"];
    $address_2 = $_POST["address_2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"]; 
    $user_id = $_SESSION["useruid"]; //This is the call to the user id

    //create function to update user info
    update_Profile_Info($con, $cpm, $name, $address_1, $address_2, $city, $state, $zipcode, $user_id);

    

}

?>