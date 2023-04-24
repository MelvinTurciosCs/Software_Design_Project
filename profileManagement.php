<!DOCTYPE html>
<?php 
  include('includes/header.php');
?>



<div class="py-4">
      <h2 class="text-center">Update Info</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="includes/config/profileMan.inc.php" method="post">
          <div class="form-group">
              <label>Company Profit Margin (XX%):</label>
              <input type="text" name="cpm" class="form-control">
          </div>
          <div class="form-group">
              <label>Full Name:</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label>Address 1:</label>
              <input type="text" name="address_1" class="form-control">
          </div>
          <div class="form-group">
              <label>Address 2:</label>
              <input type="text" name="address_2" class="form-control">
          </div>
          <div class="form-group">
              <label>City:</label>
              <input type="text" name="city" class="form-control">
          </div>
          <div class="form-group">
              <label>State:</label>
              <select name="state">  
                <option value="Select">Select</option>}  
                <option value="TX">Texas</option>  
                <option value="IL">Illinois</option>  
                <option value="CA">California</option> 
              </select>  
          </div>
          <div class="form-group">
              <label>Zip Code:</label>
              <input type="text" name="zipcode" class="form-control">
          </div>
          <button type="submit" name = "submit" class="btn btn-success">Update Info</button>
      </form>

    </div>


<?php 
  include('includes/footer.php');
?>