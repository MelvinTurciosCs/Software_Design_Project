<!DOCTYPE html>
<html lang="en">
<head>
<title>Landing page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---Leave this alone --->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
          <a class="dropdown-item" href="#">Log in</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Register</a>
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


<section class="my-4">
    <div class="py-4">
      <h2 class="text-center">About</h2>
    </div>
      <div class="container-fluid">
        <h3 class="text-center">FUEL Up</h3>
        <p class = "text-center"><b>Currently providing customers with our best quotes for fuel</p>
        
      </div>

    </section>

<!---Leave this alone --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!---Leave this alone --->
</body>
</html>