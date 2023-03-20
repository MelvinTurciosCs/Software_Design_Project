<?php 
  include('includes/header.php');
?>

<?php
  $
  $query = $mysqli->query("SELECT 'request_Gals', 'delv_adress', 'delv_date', 'ccpm', 'total_price'  FROM order_history");
  $sql = "SELECT 'request_Gals', 'delv_adress', 'delv_date', 'ccpm', 'total_price'  FROM order_history";

  if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];

        echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field5name.'<br />';
        echo $field5name.'<br />';
        echo $field5name;
    }

    /* free result set */
    $result->free();
  }
?>

<?php 
  include('includes/footer.php');

  //$_session["useruid"]
  //$sql = "SELECT 'request_Gals', 'delv_adress', 'delv_date', 'ccpm', 'total_price'  FROM order_history WHERE "
  //`order_ID`, `total_price`, `client_name`, `delv_date`, `ccpm`, `request_Gals`
?>


