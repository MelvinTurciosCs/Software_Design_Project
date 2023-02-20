<!DOCTYPE html>
<html lang="en">
<head>
<title>Landing page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---Leave this alone --->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!---Leave this alone --->
</head>
<body>

<!---This is the navigation bar --->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">FUEL UP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign-in
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./Login.php">Log in</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./Register.php">Register</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!---This is the navigation bar --->

<!---We can remove this part of the code if not needed --->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/OIP.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Georgia Natural gas.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Total.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---We can remove this part of the code if not needed --->

<!---Contact us section customer inputs info so we can contact them at our convenience --->
<section class="my-4">
    <div class="py-4">
      <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="about.php" method="post">
          <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label>Email:</label>
              <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
              <label>Number:</label>
              <input type="text" name="number" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

</section>

<!--- --->


  <!--This is the footer -->
  <footer>
      <div class="footer-content">
          <h3>Fuel Up</h3>
          <p>We strive to give the best prices to our customers.</p>
          <ul class="socials">
            <li><a href="#"><i class = "fa fa-facebook"></i></a></li>
            <li><a href="#"><i class = "fa fa-twitter"></i></a></li>
            <li><a href="#"><i class = "fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class = "fa fa-youtube"></i></a></li>
            <li><a href="#"><i class = "fa fa-linkedin-square"></i></a></li>
          </ul>
      </div>
        <div class="footer-bottom">
          <p>copyright &copy;2023 FuelUp. designed by <span>Guillermo</span></p>
        </div>
  </footer>
  <!--The footer is above  -->

<!---Leave this alone --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!---Leave this alone --->
</body>
</html>
