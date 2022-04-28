<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">HamzaFly.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="..//index.php">Flight Booking</a>
      <a href="map.php">Map</a>
      <a href="about.php">about</a>
      <a href="..//login system/login_form.php">LogIn/SignUp</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/4.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround the world</h3>
               <a href="package.php" class="btn" >discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/5.jpeg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box" >
         <a href = "https://butterandeggadventures.com/">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
         </a>
      </div>

      <div class="box">
         <a href= "https://visitidaho.org/explore-idaho/maps-and-publications/?gclid=Cj0KCQjwgYSTBhDKARIsAB8KukvK_Pg0p8PSPO-6qwLei011GRYKa7_hADbdl6llyZNn_w-rfPeLlMsaAtFgEALw_wcB">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
         </a>
      </div>

      <div class="box">
         <a href = "..//index.php"> 
         <img src="images/airplane.png" alt="">
         <h3>Flight Booking</h3></a>
      </div>


      <div class="box" >
         <a href= "map.php">
         <img src="images/bus.png" alt="">
         <h3>Transportation</h3>
         </a>
      </div>
      
   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/IMG_0954.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>our company offers best four services to the users. the transportations service which is provided with the full functions to find your way and bus companies for your destination. And the flight booking option which is provided to easily book your flights if you are not using the transportation tools.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/IMG_4382.jpg" alt="">
         </div>
         <div class="content">
            <h3>Statue Of Liberty</h3>
            <p>The Statue of Liberty is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/IMG_6041.jpg" alt="">
         </div>
         <div class="content">
            <h3>Troy University</h3>
            <p>Troy University is a public university in Troy, Alabama. It was founded in 1887 as Troy State Normal School within the Alabama State University System, and is now the flagship university of the Troy University System.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/IMG_3832.jpg" alt="">
         </div>
         <div class="content">
            <h3>Time Square </h3>
            <p>Times Square is a major commercial intersection, tourist destination, entertainment center, and neighborhood in Midtown Manhattan, New York City</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

</section>




<!-- footer section starts  -->

<section class="footer" style="background:url(images/pexels-aleksandar-pasaric-1619569.jpg) no-repeat" >

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
         <a href="#"> <i class="fas fa-envelope"></i> Hamzakamel.a@gmail.com </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>


</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>