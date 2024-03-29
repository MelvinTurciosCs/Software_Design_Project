<?php



//functions for the registration page-------------------------------------------
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
    $sql = "SELECT * FROM usercredentials WHERE username = ?;";
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
    $sql = "INSERT INTO usercredentials (username, password) VALUES (?, ?); ";
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


//functions for login page----------------------------------------------
function emptyInputLogin($username, $password){
    $result;
    if (empty($username) || empty($password)){
        $result = true;
    }
    else 
    {
        $result = false;
    }
    return $result;
}

function loginUser($con, $username, $password){
//will either return false or the actual user name
$uidExists = uidExists($con, $username);
if($uidExists === false){
        echo "user does not exist";
        header("location: ../../Login.php?error=wronglogin");
        exit();       
    }



//gets the hashed password and stores it
$pwdHashed = $uidExists["password"];
//variable to hold bool for password verified
$checkPwd = password_verify($password, $pwdHashed);

//the sql query needed to fetch the specific row 
$sql = "SELECT * FROM usercredentials WHERE username = ?";
//prepared statement
$stmt = $con->prepare($sql);
//binds the statement
$stmt->bind_param("s", $username);
//query finally executes
$stmt->execute();
//get the mysqil result
$result = $stmt->get_result();
//fetching a row
$row = $result->fetch_assoc();



if ($checkPwd === false) {
    
    header("location: ../../Login.php?error=wronglogin");
    exit();
}
else if($checkPwd === true){

    session_start();
    //Stores the client ID for the session
    $_SESSION["useruid"] = $uidExists["id"];
    if(is_null($row['name']))
    {
        header("location: ../../profileManagement.php?");
        exit();
    }
    else
    {

        header("location: ../../index.php?");
        exit();
    }

}

}

// Create the function for code for updating the user profile information
function update_Profile_Info($con, $Name, $Address_1, $Address_2, $city, $state, $zipcode, $cpm, $user_id){
    // prepare statement
    $sql = "IF EXISTS(SELECT * FROM client_info WHERE client_ID = ?) THEN
        UPDATE client_info SET Name = ?, Address_1 = ?, Address_2 = ?, city = ?, state = ?, zipcode = ?, cpm = ? WHERE client_ID = ?;
    ELSE
        INSERT INTO client_info (client_ID, Name, Address_1, Address_2, city, state, zipcode, cpm) VALUES (?, ?, ?, ?, ?, ?, ?, ?);
    END IF;";

    // prepared statement
    $stmt = mysqli_stmt_init($con);

    // checker to see if either fail
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../profileManagement.php?error=stmtfailed");
        exit();
    }

    // bind statement
    mysqli_stmt_bind_param($stmt, "isssssssisssssssi", $user_id, $Name, $Address_1, $Address_2, $city, $state, $zipcode, $cpm, $user_id, $user_id, $Name, $Address_1, $Address_2, $city, $state, $zipcode, $cpm);

    // executes statement
    mysqli_stmt_execute($stmt);

    // close statement
    mysqli_stmt_close($stmt);
    header("location: ../../profileManagement.php?error=none");

    exit();

}

function insert_Order($con, $Tprice, $user_id, $delv_date, $ccpm, $req_Gals, $Sugg_Price, $delv_Address)
{

    $sql = "INSERT INTO order_history (total_price, user_ID, delv_date, ccpm, request_Gals, suggested_Price, del_Address) VALUES (?, ?, ?, ?, ?, ?, ?);";

    // prepared statement
    $stmt = mysqli_stmt_init($con);

    // checker to see if either fail
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../profileManagement.php?error=stmtfailed");
        exit();
    }
    
    // bind statement
    mysqli_stmt_bind_param($stmt, "sssssss", $Tprice, $user_id, $delv_date, $ccpm, $req_Gals, $Sugg_Price, $delv_Address);
    
        // executes statement
        mysqli_stmt_execute($stmt);
    
        // close statement
        mysqli_stmt_close($stmt);

        header("location: ../../fuelhistory.php?error=none");

        exit();
}

?>