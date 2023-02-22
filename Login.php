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
  <title>Login Page</title>
</head>
<body>
  <!-- Login Form -->
  <form action="">
    <div class="headingContainer">
      <h3>Sign in</h3>
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

      <!-- Submit button -->
      <button class="submitButton type="submit">Login</button> 

      <!-- Forgot password link -->
      <a href="#">Forgot password?</a>
      
      <!-- Sign up link -->
      <p>Don't have an account? <a href="#">Sign up</a></p>
    </div>
  </form>
</body>
</html>
