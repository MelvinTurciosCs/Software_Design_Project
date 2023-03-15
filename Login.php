
<?php 

include("dbconnection.php");
include("funtions.php");

  include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Login Page</title>
</head>
<body>
  <!-- Login Form -->
  <form action="">
    <div class="headingContainer">
      <h3>Login</h3>
      <p>Sign in to your account with your username and password</p>
    </div>
    <!-- Main container for all inputs -->
    <div class="mainContainer">
      <!-- Username input -->
      <label for="username">Username: </label>
      <input type="text" name="username" id="username" placeholder="Enter Username" required>

      <!-- Password input -->
      <label class="loginPassword" for="password">Password: </label>
      <input type="password" name="password" id="password" placeholder="Enter Password" required>

      <!-- Remember me checkbox and Forgot Password Link -->
      <div class="subContainer">
        <!-- Remember me checkbox -->
        <label for="rememberMe">
          <input type="checkbox" checked="checked" name="rememberMe" id="rememberMe">Remember me
        </label>
        <!-- Forgot password link -->
        <p class="forgotpsd"><a href="#">Forgot password?</a></p>
      </div>
      <!-- Submit button -->
      <button class="submit_Button type="submit">Login</button> 

     
      <!-- Sign up link -->
      <p class="register">Don't have an account? <a href="#">Sign up</a></p>
    </div>
   </form>
  </body>
</html>

