<?php 
  include('includes/header.php');
?>

  <h1 style = "text-align: center;" >Fuel Up Quote History</h1>
  <div style="text-align: center;">
  <table border = 1 style="margin: 0 auto;">
    <tr>
      <th>Gallons Requested</th>
      <th>Delivery Address</th>
      <th>Delivery Date</th>
      <th>Suggested Price / Gallon</th>
      <th>Total Amount Due</th>
    </tr>
    <tr>
      <td input type="int" name="gallons_requested" required>5000</td>
      <td input type="text" name="delivery_address" required>2245 Road Roundabout Av</td>
      <td input type="date" name="delivery_date" required>02/20/2023</td>
      <td input type="int" name="suggested_price" required>$6.00</td>
      <td input type="int" name="total_price" required>$20200.00</td>
    </tr>
  </table>
</div>




<?php 
  include('includes/footer.php');

  //$_session["useruid"]
  //$sql = "SELECT 'request_Gals', 'delv_adress', 'delv_date', 'ccpm', 'total_price'  FROM order_history WHERE "
  //`order_ID`, `total_price`, `client_name`, `delv_date`, `ccpm`, `request_Gals`
?>


