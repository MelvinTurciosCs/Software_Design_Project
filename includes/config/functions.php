<?php

function emptyInputSignup($username, $password, $pwdrepeat){

    if (empty($username) || empty($password) || empty($pwdrepeat)){
        $result = true;
    }
    else 
    {
        $result = false;
    }
}

function invalidUid($username){
    if (!preg_match("/^[a-zA-Z0-9]*$/"), $username){
        $result = true;
    }
    else 
    {
        $result = false;
    }
}



?>