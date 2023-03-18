
<?php 
  include('includes/header.php');
?>

<br>

  <!-- Login Form -->
  <form action="includes/config/login.inc.php" method="post">
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
      <button class="submit_Button" name = "submit" type="submit">Login</button> 

     
      <!-- Sign up link -->
      <p class="register">Don't have an account? <a href="#">Sign up</a></p>
    </div>
   </form>

   <br>

   <?php 

if (isset($_GET["error"])){
  if ($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all fields!</p>";
  }
  else if ($_GET["error"] == "wronglogin") {
    echo "<p>Incorrect login info!</p>";
  }
  

}


?>


