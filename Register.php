<?php
include('includes/header.php');
?>
<br>


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
    <label>Password: </label>
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

<br>
<?php

if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo "<p>Fill in all fields!</p>";
  } else if ($_GET["error"] == "invaliduid") {
    echo "<p>Choose a proper username!</p>";
  } else if ($_GET["error"] == "passwordnotmatch") {
    echo "<p>Password does not match!</p>";
  } else if ($_GET["error"] == "usernametaken") {
    echo "<p>Username already taken!</p>";
  } else if ($_GET["error"] == "stmtfailed") {
    echo "<p>Something wrong, try again!</p>";
  } else if ($_GET["error"] == "none") {
    echo "<p>Succesfully signed up!</p>";
  }

}





?>