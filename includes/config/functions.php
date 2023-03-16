<?php

function emptyInputSignup($username, $password, $pwdrepeat){
    $result;
    if (empty($username) || empty($password) || empty($pwdrepeat)){
        $result = true;
    }
    else 
    {
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else 
    {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $pwdrepeat){
    $result;
    if ($password !== $pwdrepeat){
        $result = true;
    }
    else 
    {
        $result = false;
    }
    return $result;
}

function uidExists($con, $username){
    //the question mark prevents injections
    $sql = "SELECT * FROM client WHERE username = ?;";
    //prepared statement
    $stmt = mysqli_stmt_init($con);
    //checker to see if either fail
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../../register.php?error=stmtfailed");
        exit();
    }

    //binds statement
    mysqli_stmt_bind_param($stmt, "s", $username);
    //executes statement
    mysqli_stmt_execute($stmt);

    //stores into resultData
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($con, $username, $password){
    //the question mark prevents injections
    $sql = "INSERT INTO client (username, password) VALUES (?, ?); ";
    //prepared statement
    $stmt = mysqli_stmt_init($con);
    //checker to see if either fail
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../../register.php?error=stmtfailed");
        exit();
    }

    //for security reasons hash password
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    //binds statement
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
    //executes statement
    mysqli_stmt_execute($stmt);
    //close statement
    mysqli_stmt_close($stmt);
    header("location: ../../Login.php?error=none");
    exit();
}





?>