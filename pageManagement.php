<!DOCTYPE html>
<?php 
  include('includes/header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="py-4">
      <h2 class="text-center">Update Info</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="about.php" method="post">
          <div class="form-group">
              <label>Company Profit Margin:</label>
              <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
              <label>Full Name:</label>
              <input type="text" name="text" class="form-control">
          </div>
          <div class="form-group">
              <label>Address 1:</label>
              <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
              <label>Address 2:</label>
              <input type="text" name="text" class="form-control">
          </div>
          <div class="form-group">
              <label>City:</label>
              <input type="text" name="text" class="form-control">
          </div>
          <div class="form-group">
              <label>State:</label>
              <select>  
                <option value="Select">Select</option>}  
                <option value="TX">Texas</option>  
                <option value="IL">Illinois</option>  
                <option value="CA">California</option> 
              </select>  
          </div>
          <div class="form-group">
              <label>Zip Code:</label>
              <input type="text" name="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Update Info</button>
      </form>

    </div>
</body>
</html>