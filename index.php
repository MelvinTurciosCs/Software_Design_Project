<?php 
  include('includes/header.php');
?>

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
    </div>

</section>

<!--- --->


 
<?php 
  include('includes/footer.php');
?>