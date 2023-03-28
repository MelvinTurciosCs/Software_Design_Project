<?php

//this includes the header
include('includes/header.php');

        //access the dbconnection and functions php
        require_once './includes/config/dbconnection.php';

    //Holds the clients info
      //the sql query needed to fetch the specific row 
      $sql = "SELECT name, address_1, address_2, city, state, zipcode FROM client WHERE client_ID = ?";
      //prepared statement
      $stmt = $con->prepare($sql);
      //binds the statement
      $stmt->bind_param("s", $_SESSION["useruid"]);
      //query finally executes
      $stmt->execute();
      //get the mysqil result
      $result = $stmt->get_result();
      //fetching a row
      $row = $result->fetch_assoc();
?>

<div class="customer_box">
    <h1 style="text-align: center">Customer Portal</h1>

    
    <form action="">
          <div class="form-group">
              <label>Full Name:</label>
              <p><?php echo $row['name']?></p>
              
          </div>
          <div class="form-group">
              <label>Address 1:</label>
              <p><?php echo $row['address_1']?></p>
          </div>
          <div class="form-group">
              <label>Address 2:</label>
             <p><?php echo $row['address_2']?></p> 
          </div>
          <div class="form-group">
              <label>City:</label>
              <p><?php echo $row['city']?></p> 
          </div>
          <div class="form-group">
              <label>State:</label>
             <p><?php echo $row['state']?></p> 
          </div>
          <div class="form-group">
              <label>Zip Code:</label>
             <p><?php echo $row['zipcode']?></p> 
        </div>

    </form>




</div>

<br>
<br>

<?php

//this includes the header
include('includes/footer.php');
?>