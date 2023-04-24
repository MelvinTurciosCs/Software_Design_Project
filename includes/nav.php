<ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php 
      require_once './includes/config/dbconnection.php';
      
      
    



      //if the user is logged in
        if (isset($_SESSION["useruid"])){
          echo "<li><a class= 'nav-link' href='customerPage.php'>Profile</a></li>";
          echo "<li><a class= 'nav-link' href='Fuel_Req_Form.php'>Fuel Request Form</a></li>";
          echo "<li><a class= 'nav-link' href='fuelhistory.php'>Quote History</a></li>";
          echo "<li><a class= 'nav-link' href='profileManagement.php'>Update Info</a></li>";
          echo "<li><a class= 'nav-link' href='./includes/logout.php'>Log out</a></li>";
        }
        else{
          echo "<li><a class= 'nav-link' href='Login.php'>Log in</a></li>";
          echo "<li><a class= 'nav-link' href='Register.php'>Register</a></li>";
        }

      ?>
      
</ul>