<?php 
  include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Resister Form -->
    <form action="includes/config/register.inc.php" method="post">
        <div class="headingContainer">
            <h3>Sign Up</h3>
            <p>Create an account</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">

        <!-- Username input -->
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Enter Username" required>

        <!-- password input -->
        <label >Password: </label>
        <input type="password" name="pwd" placeholder="Enter Password" required>

        <!-- Password Confirmation input -->
        <label class="loginPassword" for="confirm_password">Confirm Password: </label>
        <input type="password" name="pwdrepeat" id="password" placeholder="Confirm Password" required>

        <!-- Create Account button -->
        <button class="submit_Button " type="submit" name="submit">Create Account</button> 

     
        <!-- Sign up link -->
        <p class="register">Already have an account? <a href="#">Login</a></p>
    </div>
 </form>
    

    </div>
</body>
</html>

