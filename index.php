<?php
    include('includes/header.php');
?>
  <!-- This will be an image that will have a button for login and register -->
  <div class="banner image">
  <div class="image_div_child">
    <img src="images/Get the Best Fuel Quote in Town.png" title="Tanker Truck" alt="image1" style="width: 100%">
    <div class="image_div_child_text"></div>
  </div>
    

  <!-- About Us Information: History, Mission, Core Values -->
  <div class="About_Container">
    <h1 class="About">About</h1>
    <h3 class="ourHistory">Our History</h3>
    <p class="historyParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    <div class="childContainer"  style="padding-top: 25px; padding-bottom: 15px">
      <div class="flex-child box_one">
        <h3 style="text-align: center;">Mission</h3>
        <p style="text-align: center;padding-left: 100px; padding-right: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
      </div>
      <div class="flex-child box_two">
        <h3 style="text-align: center;">Core Values</h3>
        <p style="text-align: center; padding-left: 100px; padding-right: 100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
      </div>
    </div>
  </div>

  <div class="image_div">
  <div class="image_div_child">
    <img src="./images/tanker.png" title="oil tank icons" alt="image1">
    <p>img.</p>
  </div>
  <div class="image_div_child">
    <img src="./images/fossil-fuel.png" alt="image2">
    <p>Cleanly sourced from fracking rigs near local farms!</p>
  </div>
  <div class="image_div_child">
    <img src="./images/drilling-rig.png" alt="image3">
    <p>We have recently expanded to polluting the ocean as well!</p>
  </div>
</div>

<style>
.image_div {
  display: flex;
  justify-content: space-between;
}

.image_div_child {
  text-align: center;
}

.image_div_child img {
  width: 150px;
  height: 150px;
}

.image_div_child p {
  margin: 0;
  padding-top: 5px;
  padding: 10px;
  font-size: 12px;
}
</style>


  <!-- Contact Us and Google Image in background-->
  </div>
  <div class="bg_Image">
    <div class="contact_div">
      <h1 class="contact">Contact Us</h1>
      <div class="officeOne">
        <h3>Head Office</h3>
        <p>Address: 1234 Main Street, Houston, TX, 77053</p>
        <p>Phone Number: 123-456-7890</p>
        <p>Email: ApexFuelGroup@gmail.com</p>
      </div>
      <div class="officeTwo">
          <h3>Office #2</h3>
          <p>Address: 5678 Main Street, Houston, TX, 77053</p>
          <p>Phone Number: 123-654-0987</p>
          <p>Email: ApexFuelGroup60@gmail.com</p>
        </div>
      </div>
      
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php
    include('includes/footer.php');
?>