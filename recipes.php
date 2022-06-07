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
         <li><a href="#blog" class="active">Healthy Recipes</a></li>
         <li><a href="login-system/home.php">Dashboard</a></li>
         <div class="close"><i class="fas fa-times"></i></div>
       </ul>
     </nav>
     <div class="content">
       <h2>Healthy & Tasty Recipes</h2>
       <button class="btn-get"><a href="#blog">View Recipes</a></button>
     </div>
   </header>
   <!-- end of header -->



   <!-- blog -->
   <section class="blog" id="blog">
     <div class="container">
       <!-- <div class="title">
         <h2>Check out health  recipes</h2>
         <p>Can you have taste and health in one dish! Well check out here.</p>
       </div> -->
       <div class="blog-content">
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/recipe.jpg" alt="">
           </div>
           <div class="blog-text">
             <h2>Brocoli and Salad?</h2>
             <p>Broccoli has an excellent nutritional profile with numerous potential health benefits. It contains a lot of fibre, vitamin C, and antioxidants (1Trusted Source). Broccoli can be cooked in a variety of ways, including sautéing, steaming, boiling, or roasting, but it can also be served raw in salads or with dips. While broccoli is more commonly served cooked, it can be a nutritious addition to your diet without much preparation.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/recipe2.jpg" alt="">
           </div>
           <div class="blog-text">
                 <h2>Cucumber Sandwich!</h2>
             <p>It's the ideal evening snack. A combination of antioxidants and fibre from various vegetables and wheat bread. Cucumber and tomato contain water, which promotes satiety and hydration. Hung Curd is high in calcium and protein. This open-faced, healthy sandwich recipe may not be a towering hero of a sandwich, but it is a hero in terms of providing your body with the nutrients it requires. Cucumbers have anti-inflammatory, antioxidant, and anti-cancer properties. And their crunch goes perfectly with rich, creamy low-fat cream cheese.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/recipe3.jpg" alt="">
           </div>
           <div class="blog-text">
             <h2>Spinach & Mushroom in same line? </h2>
             <p>Spinach mushroom quiche is a savoury pie loaded with cheese and delicious vegetables. The combination of cheese and mushrooms will be ideal for a hearty meal. The crust will bring the flavours together and balance them out.
It contains spinach, which is high in calcium, vitamin D, and iron. Mushrooms are high in antioxidants and provide essential nutrients such as iron and calcium. Cheese is a probiotic and, of course, a calcium source. This vegan, gluten-free, low-sodium, high-protein recipe will improve your bone health and promote healthy ageing.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/recipe4.jpg" alt="">
           </div>
           <div class="blog-text">
             <h2>Will greek yoghurt help gaining weight?</h2>
             <p>To make yoghurt, milk is fermented with live cultures of beneficial bacteria. Greek yoghurt contains less sugar than regular yoghurt. When the whey is removed, the yoghurt becomes thicker, creamier, and tarter.
Some manufacturers thicken regular yoghurt and sell it as "Greek-style," which may not have the same health benefits as Greek yoghurt. Furthermore, low-fat or no-fat Greek yoghurt may not provide the same health benefits as traditional Greek yoghurt. Greek yoghurt may be beneficial to one's health due to the nutrients it contains, which include:

calcium

protein

probiotics

iodine

B-12 vitamin.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/recipe5.jpg" alt="">
           </div>
           <div class="blog-text">
             <h2>Omelet muffins!!</h2>
             <p>The health benefits of eggs are reason enough to try these delectable breakfast egg muffins! Eggs are a nutritional powerhouse. You've got a lot of protein and some super healthy fats like omega 3.
Furthermore, that's almost no carbs, so if you're trying to cut back on carbs for any reason, our low carb egg muffins are the food for you! The following vitamins are included:
A vitamin
B vitamins
B12 vitamin
D vitamin
Folate
Selenium
Calcium
Phosphorus
Zinc.</p>
             <!-- <a href = "#">Read More</a> -->
           </div>
         </div>
         <!-- end of item -->
         <!-- item -->
         <div class="blog-item">
           <div class="blog-img">
             <img src="images/recipe6.jpg" alt="">
             <!-- <span><i class = "far fa-heart"></i></span> -->
           </div>
           <div class="blog-text">
             <h2>Is salmon good for heart?</h2>
             <p>Salmon is high in omega-3 fatty acids, which reduce inflammation and are important for tissue health, according to Meyer-Jax. It's also high in protein, with a 3.5-ounce serving containing about 20 grammes. Protein aids in the growth and repair of muscles and tissues. Salmon is high in protein, which is important for bone health, preventing muscle loss, and assisting the body in healing and repair. Its high astaxanthin content may help to maintain skin elasticity, reduce ageing signs, and protect the skin from UV damage.</p>
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