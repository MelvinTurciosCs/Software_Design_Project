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
              <label>Name:</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
              <label>Number:</label>
              <input type="text" name="number" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
</body>


</html>

<!--<section class="my-4">
    <div class="py-4">
      <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="about.php" method="post">
          <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
              <label>Number:</label>
              <input type="text" name="number" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

</section>
-->
