<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="spport/bootstrap.min.css" rel="stylesheet"/>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <script  src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css2?family=poppins&display=swap" rel="stylesheet">
</head>


<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">HamzaFly.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="map.php">Map</a>
      <a href="..//index.php">Flight Ticket</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/Untitled-1.png) no-repeat">
   <h1>Transportation</h1>


</div>

<!-- booking section starts  -->


      <div class="jumbotron">
            <div class="container-fluid">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                        <div class="col-xs-4">
                            <input type="text" id="from" placeholder="Origin" class="form-control">
                        </div>
                   </div>
                   <div class="form-group">
                    
                        <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
                        <div class="col-xs-4">
                            <input type="text" id="to" placeholder="Destination" class="form-control">
                        </div>
                      
                     </div>
                     
                </form>
    
                <div class="col-xs-offset-2 col-xs-10">
                    <button class="btn btn-info btn-lg " onclick="calcRoute();">Search</button>
                </div>
            </div>
            <div class="container-fluid">
                <div id="googleMap">
    
                </div>
                <div id="output">
    
                </div>
            </div>
    
        </div>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcGdFZr8keMB2MDUZxdEExOdczCQbZhoI&libraries=places"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="Scripts/jquery-3.1.1.min.js"></script>
        <script src="transit.js"></script>



<!-- booking section ends -->


<!-- footer section starts  -->

<section class="footer" style="background:url(images/pexels-aleksandar-pasaric-1619569.jpg) no-repeat">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->




<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>