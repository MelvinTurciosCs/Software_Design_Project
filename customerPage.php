<?php

//this is to establish connection to database
session_start();
require_once "..includes/config/dbconnection.php";

//this includes the header
include('includes/header.php');
?>

<div class="customer_box">
    <h1 style="text-align: center">Customer Portal</h1>

    <div class="container" style="margin:0 auto;">
    
        <div class="form-group">
              <label>Company Profit Margin:</label>
              <p>20%</p>
          </div>
          <div class="form-group">
              <label>Full Name:</label>
              
          </div>
          <div class="form-group">
              <label>Address 1:</label>
          </div>
          <div class="form-group">
              <label>Address 2:</label>
          </div>
          <div class="form-group">
              <label>City:</label>
          </div>
          <div class="form-group">
              <label>State:</label>
          </div>
          <div class="form-group">
              <label>Zip Code:</label>

        </div>

    </div>




</div>

<!---Leave this alone --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!---Leave this alone --->
</body>
</html>
