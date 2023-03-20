<?php
  session_start();
?>

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
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <a class="navbar-brand" href="#">FUEL UP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php include('includes/nav.php');?>
  </div>
</nav>
<!---This is the navigation bar --->