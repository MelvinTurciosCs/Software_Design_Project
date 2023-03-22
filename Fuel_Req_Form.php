<?php
include('includes/header.php');
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

    <!--should display the suggested price-->
    <div>
      <label>Suggested Price per Gallon:</label>
    </div>

    <button class="SUB_Button" name = "submit">Submit</button>
  </div>

</div>

<?php
include('includes/footer.php');
?>
