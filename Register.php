<!-- Hello World -->
<?php 
  include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <div class="py-4">
      <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="about.php" method="post">
          <div class="form-group">
              <label>Username:</label>
              <input type="text" name="username" class="form-control" required>
          </div>
          <div class="form-group">
              <label>Email:</label>
              <input type="text" name="username" class="form-control" required>
          </div>
          <div class="form-group">
              <label>Password:</label>
              <input type="password" name="password" class="form-control" required>
          </div>
          <div class="form-group">
              <label>Confirm Password:</label>
              <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-success">Register</button>
          <button type="submit" class="btn btn-success">Already have an account?</button>
      </form>

    </div>
</body>


</html>

