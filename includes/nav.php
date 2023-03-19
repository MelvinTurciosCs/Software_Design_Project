<ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      <?php 
      require_once './includes/config/dbconnection.php';
      
      
      //the sql query needed to fetch the specific row 
      $sql = "SELECT * FROM client WHERE username = ?";
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



      //if the user is logged in
        if (isset($_SESSION["useruid"]) && !empty($row["name"])){
          echo "<li><a class= 'nav-link' href='customerPage.php'>Profile</a></li>";
          echo "<li><a class= 'nav-link' href='./includes/logout.php'>Log out</a></li>";
        }
        elseif (isset($_SESSION["useruid"]) && empty($row["name"])){
          echo "<li><a class= 'nav-link' href='./includes/logout.php'>Log out</a></li>";
        }
        else{
          echo "<li><a class= 'nav-link' href='Login.php'>Log in</a></li>";
          echo "<li><a class= 'nav-link' href='Register.php'>Register</a></li>";
        }

      ?>
      
</ul>