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
      <h2 class="text-center">Fuel Quote Request Form</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="about.php" method="post">
          <div class="form-group">
              <label>Gallons:</label>
              <input type="text" name="gallons" class="form-control">
          </div>
          <div class="form-group">
              <label>Delivery Address:</label>
              <input type="text" name="text" class="form-control">
          </div>
          <div class="form-group">
              <label>Delivery Date:</label>
              <input type="text" name="text" class="form-control">
          </div>

          <button type="submit" class="btn btn-success">Click here to get your quote!</button>
      </form>

    </div>
</body>
