<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="..//travelwebsite/css/style.css">


</head>
<body>
<section class="header">

<a href="..//travelwebsite/home.php" class="logo">HamzaFly.</a>

<nav class="navbar">
   <a href="home.php">home</a>
   <a href="..//index.php">Flight Ticket</a>
   <a href="book.php">Trip Booking</a>
   <a href="map.php">Map</a>
   <a href="..//login system/admin_page.php">package</a>
   <a href="about.php">about</a>
   <a href="login_form.php">LogIn/SignUp</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>