<?php
include('includes/header.php');
?>

<div class="request_form">

  <div class="container">
    <h1>Customer info</h1>
    <div>
    <b>Name: Melvin T<b>
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

  <div class="container">
    <h1>Fuel Quote Form</h1>
    <!--used to type the gallons requesteds-->
    <label for="Gal">Gallons Requested:</label>
    <input class="GallReq" name="GalReq" type="number" id="Gal" placeholder="Number of Gallons" min="1" max="1000" />

    <!--Used to type address-->
    <label for="ADDRESS">Address:</label>
    <input class="Addy" name="Address" type="text" id="ADDRESS" placeholder="Address" />


    <!--used for delivery date-->
    <label for="DELVDATE">Delivery Date:</label>
    <input class="DelDate" name="DELIVDate" type="Date" id="DELVDATE" placeholder="Delivery Date" />


    <!--should display the suggested price-->
    <div>
      <label>Suggested Price per Gallon:</label>
    </div>

    <!--Should display total price -->
    <div>
      <label>Total Price</label>
    </div>


    <button class="SUB_Button">Submit</button>
  </div>

</div>

<?php
include('includes/footer.php');
?>