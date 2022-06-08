<?php

include 'login-system/config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login-system/login.php');
};

?>

<!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Workout videos</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font awesome icon -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <link rel="stylesheet" href="style.css">
 </head>

 <body>

 <header>
     <nav>
       <div class="logo">SV<span>ASTH</span>YAM</div>
       <div class="open"><i class="fas fa-bars"></i></div>
       <ul class="links">
         <li><a href="index.php">Home</a></li>
         <li><a href="#network" class="active">Workout videos</a></li>
         <li><a href="login-system/home.php">Dashboard</a></li>
         <div class="close"><i class="fas fa-times"></i></div>
       </ul>
     </nav>
     <div class="content">
       <h2> Our Fitness </h2>
       <button class="btn-get"><a href="#network">view workout videos</a></button>
     </div>
   </header> 


   <section class="blog" id="blog">
     <div class="container">
     <div class="blog-content">
        <!-- item -->
     <div class="blog-item">
     <div class="blog-video">
     <iframe width="350" height="225" src="https://www.youtube.com/embed/zejHjXjhdiY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
     <div class="blog-text">
     <h2>Fitness for life</h2>
             <p>If we could give every individual the right amount of nourishment and excercise,not too little and not too much ,we would have found the safest way to health.</p>
     </div>
     </div>
<!-- end of item -->
         <!-- item -->
         <div class="blog-item">
     <div class="blog-video">
     <iframe width="350" height="225" src="https://www.youtube.com/embed/aoQrCsOenJY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
     <div class="blog-text">
     <h2>Dance fit</h2>
             <p>Dance fitness is a type of group excercise calss that incorporates some or many forms of dance.</p>
     </div>
     </div>
     
     <!-- end of item -->
         <!-- item -->
         
         <div class="blog-item">
     <div class="blog-video">
     <iframe width="350" height="225" src="https://www.youtube.com/embed/ml6cT4AZdqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
     <div class="blog-text">
     <h2>Power Hour</h2>
             <p>Our growing softness,our increasing lack of physical fitness,is a meance to our security.</p>
     </div>
     </div>
<!-- end of item -->
         <!-- item -->
         <div class="blog-item">
     <div class="blog-video">
     <iframe width="350" height="225" src="https://www.youtube.com/embed/xqVBoyKXbsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
     <div class="blog-text">
     <h2>No Quit Fitness</h2>
             <p>Doing workout is not about better than someone else.It's about being better than you used to be.</p>
     </div>
     </div>
    
    <!-- end of item -->
         <!-- item -->
         
         <div class="blog-item">
     <div class="blog-video">
     <iframe width="350" height="225" src="https://www.youtube.com/embed/hGOYxik3oeE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
     <div class="blog-text">
     <h2>Fresh,Fit and Healthy</h2>
             <p>Physical fitness is not only one of the most important keys to a healthy body,it is the basis of dynamic nad creative intellectual activity.</p>
     </div>
     </div>
   <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
     <div class="blog-video">
     <iframe width="350" height="225" src="https://www.youtube.com/embed/IFQmOZqvtWg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
     <div class="blog-text">
     <h2>Make your body</h2>
             <p>A mix of aerobics and body conditioning exercises to give you a balanced workout.It will also improve your stamina and endurance.</p>
     </div>
     </div>
      <!-- end of item -->
     </div>
     </div>
     </section>
      <!-- end of blog -->
     </body>

     <!-- footer -->
   <footer>
     &copy; Svasthyam 2022
   </footer>
   <!-- end of footer -->

   </body>

 </html>