<?php 
  include('includes/header.php');
?>

<?php

  //access the dbconnection and functions php
  require_once './includes/config/dbconnection.php';

  //declare the session variable to fetch specific data, place on where user_id = #user_id
  $user_id = $_SESSION["useruid"];

  
  //delete stuff below
  $sql = "SELECT request_Gals, delv_Adress, delv_date, suggested_price, total_price FROM order_history WHERE user_ID = $user_id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>" . $row["request_Gals"]. "</td><td>" . $row["delv_Adress"]. "</td><td>" . $row["delv_date"]. "</td><td>" . $row["suggested_price"]. "</td><td>" . $row["total_price"]. "</td></tr>";
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>

<html>
<head>
    <title>Order History</title>
</head>
<body>
    <table>
        <tr>
            <th>Gallons Requested</th>
            <th>Delivery Address</th>
            <th>Delivery Date</th>
            <th>Suggested Price</th>
            <th>Total Price</th>
        </tr>
        <?php include 'retrieve_data.php'; ?>
    </table>
</body>
</html>


<?php 
  include('includes/footer.php');

  //$_session["useruid"]
  //$sql = "SELECT 'request_Gals', 'delv_adress', 'delv_date', 'ccpm', 'total_price'  FROM order_history WHERE "
  //`order_ID`, `total_price`, `client_name`, `delv_date`, `ccpm`, `request_Gals`
?>


