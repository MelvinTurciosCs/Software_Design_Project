<?php
include('includes/header.php');

function fuelCalc($con, $gallons){
  //call users information
  session_start(); //This is used to access the global variable for userid
  //the sql query needed to fetch the specific row 
  $sql = "SELECT * FROM client WHERE client_ID = ?";
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
      $usermargin = (.02 + $usercpm + $userlocation - $userhistory);
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
  ?>
  <div class="container">
    <h1>Customer info</h1>
    <div>
    <b>Name: <?php echo $user_id?><b>
    </div>
    <div>
      <b>Address 1: 123 apple Dr</b>
    </div>
    <div>
      <b>City: Houston</b>
    </div>
    <div>
      <b>State: TX</b>
    </div>
    <div>
      <b>Zipcode: 66666</b>
    </div>
  </div>
  <form action="/Fuel_Req_Form.php" method="post">
    <div class="container">
      <h1>Fuel Quote Form</h1>
      <!--used to type the gallons requesteds-->
      <label for="Gal">Gallons Requested:</label>
      <input class="GallReq" name="GalReq" type="number" id="Gal" placeholder="Number of Gallons" min="1" max="1000" />

      <!--used for delivery date-->
      <label for="DELVDATE">Delivery Date:</label>
      <input class="DelDate" name="DELIVDate" type="Date" id="DELVDATE" placeholder="Delivery Date" />
      
    </form>
    
    
  </div>

</div>

<?php
include('includes/footer.php');
?>
