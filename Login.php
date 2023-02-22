
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
=======
  <title>Document</title>
</head>
<body>

<!-- This is the code for the carousel images in the background -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/OIP.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Georgia Natural gas.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Total.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- This is the form to create a login page -->
<form class="login-form" action="login.php" method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="submit" value="Login">
</form>
</body>
</html>

