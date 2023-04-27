<?php
include('includes/header.php');
//default gallons to zero for now

$gallons = isset($_POST['gallons']) ? $_POST['gallons'] : 0;
$delv_date = isset($_POST['delv_date']) ? $_POST['delv_date'] : '2000-01-01';

function fuelCalc($con, $gallons){
  //call users information
  //session_start(); //This is used to access the global variable for userid
  //the sql query needed to fetch the specific row 
  $sql = "SELECT * FROM client_info WHERE client_ID = ?";
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
  $sql2 = "SELECT * FROM order_history WHERE user_ID = ?";
  //prepared statement
  $stmt2 = $con->prepare($sql2); 
  //binds the statement
  $stmt2->bind_param("s", $_SESSION["useruid"]);
  //query finally executes
  $stmt2->execute();
  //get the mysqil result
  $result2 = $stmt2->get_result();
  $usercpm = $row["cpm"]/100;
  //check if within texas
  if($row["state"] == "TX"){
      $userlocation = .2; //need to change later to get location
  }
  else{
      $userlocation = .4;
  }
  //check for previous history
  if($result2->num_rows > 0){
      $userhistory = .1;
  }
  else{
      $userhistory = 0;
  }
  //calculate final margin
  if($gallons > 1000){
      $usermargin = (.02 + $usercpm + $userlocation - $userhistory);
  }
  else{
      $usermargin = (.03 + $usercpm + $userlocation - $userhistory);
  }
  //calculate final price
  $userprice = $usermargin * $gallons;
  return $userprice;
}



?>
<div class="request_form">
  <?php
    //access the dbconnection and functions php
    require_once './includes/config/dbconnection.php';
    require_once './includes/config/functions.php';

    //declare the session variable to fetch specific data, place on where user_id = #user_id
    $user_id = $_SESSION["useruid"];
    //fetch row from client table with specific $user_id
    $sql = "SELECT * FROM client_info WHERE client_ID = ?";
    //prepared statement
    $stmt = $con->prepare($sql);
    //binds the statement
    $stmt->bind_param("s", $user_id);
    //query finally executes
    $stmt->execute();
    //get the mysqil result
    $result = $stmt->get_result();
    //fetching a row
    $row = $result->fetch_assoc();
    //save the data into local variables
    $name = $row["Name"];
    $address1 = $row["Address_1"];
    $address2 = $row["Address_2"];
    $city = $row["city"];
    $state = $row["state"];
    $zipcode = $row["zipcode"];
  ?>
  <div class="container">
    <h1>Customer info</h1>
    <div>
    <b>Name: <?php echo $name?><b>
    </div>
    <div>
      <b>Address 1: <?php echo $address1?></b>
    </div>
    <div>
      <b>City: <?php echo $city?></b>
    </div>
    <div>
      <b>State: <?php echo $state?></b>
    </div>
    <div>
      <b>Zipcode: <?php echo $zipcode?></b>
    </div>
  </div>  
  <!--simple form that takes in gallons and sends it to the fuelCalc function-->
  <div class="container">

    <form action="Fuel_Req_Form.php" method="post">
    <!--label for="del_Address">Address:</!--label>
      <!-- input type number, which defaults to 0, and will only accept numbers -->
      <!--input type="text" name="delv_Address" id="delv_Address" placeholder="Enter Address" required-->
      <br><br>
      <label for="delv_date">Deliver Date:</label>
      <!-- input type number, which defaults to 0, and will only accept numbers -->
      <input type="date" id="delv_date" name="delv_date" value='2023-01-01' required>
      <br><br>
      <label for="gallons">Gallons Requested:</label>
      <!-- input type number, which defaults to 0, and will only accept numbers -->
      <input type="number" id="gallons" name="gallons" min="0" value="0">
      <br><br>
      <input type="submit" value="Check Price">
      <!--confirm button to send to database-->

      <form action="fuel_req.php" method="post">
      <button class="submit_Button" name = "submit" type="submit">confirm</button>
      </form>
      <!--php code to save the inputs into local variables-->
    <?php
      // Get the saved input values
      //$delv_Address = $_POST["delv_Address"];
      $gallons = isset($_POST['gallons']) ? $_POST['gallons'] : 0;
      $delv_date = isset($_POST['delv_date']) ? $_POST['delv_date'] : '2000-01-01';


      $total_Price = fuelCalc($con, $gallons);
      // Insert the values into the order_history table
      //Should call the values from the session variable
      $user_ID = $_SESSION["useruid"];
      $usercpm = $row["cpm"];
      $address1 = $row["Address_1"];
      if (isset($_POST["submit"])) {
      //sql statement to insert the values into the table
      $sql = "INSERT INTO order_history (total_price, user_ID, delv_date, ccpm, request_Gals, suggested_Price, del_Address)
      VALUES ('$total_Price', '$user_ID', '$delv_date', '$usercpm', '$gallons', '$total_Price', '$address1')";

      if ($con->query($sql) === TRUE) {
          echo "New order record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
    ?>

      <?php
        //saves inputs into local vars
        $gallons = isset($_POST['gallons']) ? $_POST['gallons'] : 0;

      ?>
      <!--after submit, the function will be called and the result will be displayed, with a confirm button to send to database-->
      <div>
        <b>Price per Gallon: $<?php echo fuelCalc($con, $gallons)?></b>

      </div>
    </form>

  </div>

</div>

<?php
include('includes/footer.php');
?>
