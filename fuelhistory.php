<?php 
  include('includes/header.php');
?>

<div>
  <h1>Fuel Up Quote History</h1>
  <table border = "1">
    <tr>
      <th>Gallons Requested</th>
      <th>Delivery Address</th>
      <th>Delivery Date</th>
      <th>Suggested Price / Gallon</th>
      <th>Total Amount Due</th>
    </tr>
    <tr>
      <td input type="int" name="gallons_requested" required>500</td>
      <td input type="text" name="delivery_address" required>2245 Avenue Road Drive</td>
      <td input type="date" name="delivery_date" required>02/23/2023</td>
      <td input type="int" name="suggested_price" required>$50.00</td>
      <td input type="int" name="total_price" required>$20000.00</td>
    </tr>
  </table>
</div>


<?php 
  include('includes/footer.php');
?>
