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
   <title>Svasthyam | Fitness Blog</title>
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
         <li><a href="#blog" class="active">Motivational Stories</a></li>
         <li><a href="login-system/home.php">Dashboard</a></li>
         <div class="close"><i class="fas fa-times"></i></div>
       </ul>
     </nav>
     <div class="content">
       <h1>Motivational Stories</h1>
       <button class="btn-get"><a href="#blog">View Stories</a></button>
     </div>
   </header>
   <!-- end of header -->



   <!-- blog -->
   <section class="blog" id="blog">
     <div class="container">
       <!-- <div class="title">
         <h2>Motivational Stories</h2>
         <p>Some personal experinces through their own writings!</p>
       </div> -->
       <div class="blog-content">
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/story.jpg" alt="">
           </div>
           <div class="blog-text">
             <span>Santhosi Mehra</span>
             <h2>Yoga is divine!</h2>
             <p>Some argue that yoga does not help you shape your body properly! However, it does not apply to everyone! Throughout the session, I noticed a gradual and detailed transformation of my body. Yoga teaches you how to understand your body parts and how they function. What is the significance of our organs? How do they function while working? Every part of the body is vital in its own right. So, I would say that yoga provides both mental and physical satisfaction!</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/story2.jpg" alt="">
           </div>
           <div class="blog-text">
             <span>Mr&Mrs Mithal</span>
             <h2>Couple workouts are really fun!</h2>
             <p>They claim that working out in a group or with our partners does not result in significant improvements in our body shape. But we are vehemently opposed! We have made significant progress in our body's shape, and we now have time to spend. Working out in a couple, a group, or even with your friends will be extremely beneficial in a variety of ways, including: learning more about each other, being able to work out for a longer period of time, and so on.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/story3.jpg" alt="">
           </div>
           <div class="blog-text">
             <span>Mr.Mishra</span>
             <h2>Minimal Cardio at this age is really good for heart. </h2>
             <p>Some of us worry that working out at this age  will cause a heart attack!
               Certainly not! Working on threadmill at minimal speed will be beneficial to your heart health.
               Doing a minimal cardio  for  an hour every day can reduce your risk of heart attack or stroke.I am having a risk free life because of working out daily . So keep your fears out of your healthy lifestyle and age is just a number right?</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/story4.jpg" alt="">
           </div>
           <div class="blog-text">
             <span>Mithali Mehra</span>
             <h2>Will Zumba be helpful in loosing weight?</h2>
             <p>Trust me, I initially thought that Zumba would not aid in weight loss, but I enjoy dancing and couldn't resist enrolling in a Zumba class. But all my doubts were washed away when I saw the results for myself after a few months of consistent Zumba practise. It would be very beneficial for people who do not enjoy closed gym areas or mechanical workouts to participate in Zumba.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/story5.jpg" alt="">
           </div>
           <div class="blog-text">
             <span>Sunaina Cooper</span>
             <h2>Leg press really presses your leg.</h2>
             <p>Some trainers claim that doing leg press does not help tone your legs or shape your thighs! But that is incorrect; I have noticed a significant change in the shape of my legs and toning of my thighs. Leg press really works your legs, but it's for your own good. If you want a perfect shape for your legs, I highly recommend the leg press.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/story6.jpg" alt="">
             <!-- <span><i class = "far fa-heart"></i></span> -->
           </div>
           <div class="blog-text">
             <span>Jahnavi Gupta</span>
             <h2>Even without machines we can reduce our weight!</h2>
             <p>It’s happened to the best of us: We gear up, cue up a killer cycling routine, and head straight for the gym— only to find out it’s temporarily closed (curse you, maintenance!).

With heavy hearts and glutes dying to feel the burn, we sullenly make our way back home. At this point, you may be tempted to give up for the remainder of the day, but don’t change out of your gym clothes just yet! You already have the only workout machine you need on you.

Your body is the best tool you have for getting a great workout in with no equipment needed. Body weight training exercises (moves that force you to push or pull your own weight) can tone and slim your body while adding definition to your muscles. They also prepare you to take on physical activities you need to perform every day from lifting your kids to practicing good posture and carrying heavy bags.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
       </div>
     </div>
   </section>
   <!-- end of blog -->


   <!-- footer -->
   <footer>
     &copy; Svasthyam 2022
   </footer>
   <!-- end of footer -->


 </body>

 </html>