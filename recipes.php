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
             <p>Broccoli has an excellent nutritional profile with numerous potential health benefits. It contains a lot of fibre, vitamin C, and antioxidants (1Trusted Source). Broccoli can be cooked in a variety of ways, including sautéing, steaming, boiling, or roasting, but it can also be served raw in salads or with dips. While broccoli is more commonly served cooked, it can be a nutritious addition to your diet without much preparation.
<ol>
    <li>Ingredient:</li>

<li>3 slices bacon</li>
<li>¼ cup sour cream</li>
<li>¼ cup mayonnaise</li>
<li>4 teaspoons rice vinegar or cider vinegar</li>
<li>¼ teaspoon ground pepper</li>
<li>4 cups finely chopped broccoli florets (11 ounces)</li>
<li>½ cup sliced scallions</li>
<li>½ cup shredded extra-sharp Cheddar cheese.</li>
<li>Directions</li>
<li>Step 1
Cook bacon in a large skillet over medium heat until crisp, 5 to 7 minutes. Transfer to a paper-towel-lined plate. Reserve 1 tablespoon bacon fat. Chop the bacon when cool enough to handle.</li>
<li>Step 2
Whisk sour cream, mayonnaise, vinegar, pepper and the reserved bacon fat together in a large bowl. Add broccoli, scallions, cheese and the chopped bacon. Stir to coat with the dressing.</li>
</ol>
             </p>
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
             <p>It's the ideal evening snack. A combination of antioxidants and fibre from various vegetables and wheat bread. Cucumber and tomato contain water, which promotes satiety and hydration. Hung Curd is high in calcium and protein. This open-faced, healthy sandwich recipe may not be a towering hero of a sandwich, but it is a hero in terms of providing your body with the nutrients it requires. Cucumbers have anti-inflammatory, antioxidant, and anti-cancer properties. And their crunch goes perfectly with rich, creamy low-fat cream cheese.
             <ol>
                 <li>Ingredients:</li>
<li>2 ounces cream cheese, at room temperature</li>
<li>1 tablespoon low-fat plain Greek yogurt</li>
<li>1 tablespoon sliced fresh chives</li>
<li>1 tablespoon chopped fresh dill</li>
<li>¼ teaspoon ground pepper</li>
<li>2 slices whole-wheat sandwich bread</li>
<li>⅓ cup thinly sliced English cucumber</li>
<li>Directions</li>
<li>Stir cream cheese, yogurt, chives, dill and pepper together in a small bowl until well blended. Spread the mixture evenly on one side of each bread slice. Top 1 slice with cucumber slices, then top with the other bread slice, cream cheese-side down. Cut the crusts from the sandwich and cut it in half diagonally.</li>
             </ol>


             </p>
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
It contains spinach, which is high in calcium, vitamin D, and iron. Mushrooms are high in antioxidants and provide essential nutrients such as iron and calcium. Cheese is a probiotic and, of course, a calcium source. This vegan, gluten-free, low-sodium, high-protein recipe will improve your bone health and promote healthy ageing.
<ol>
    <li>Ingredients:</li>
<li>2 tablespoons extra-virgin olive oil</li>
<li>8 ounces sliced fresh mixed wild mushrooms such as cremini, shiitake, button and/or oyster mushrooms</li>
<li>1 ½ cups thinly sliced sweet onion</li>
<li>1 tablespoon thinly sliced garlic</li>
<li>5 ounces fresh baby spinach (about 8 cups), coarsely chopped</li>
<li>6 large eggs</li>
<li>¼ cup whole milk</li>
<li>¼ cup half-and-half</li>
<li>1 tablespoon Dijon mustard</li>
<li>1 tablespoon fresh thyme leaves, plus more for garnish</li>
<li>¼ teaspoon salt</li>
<li>¼ teaspoon ground pepper</li>
<li>1 ½ cups shredded Gruyère cheese</li>
<li>Directions:</li>
<li>Step 1
Gather all the ingredients. Preheat oven to 375 degrees F. Coat a 9-inch pie pan with cooking spray; set aside.</li>
<li>Step 2
Heat 2 tablespoons oil in a large nonstick skillet over medium-high heat; swirl to coat the pan. Add 8 ounces mushrooms; cook, stirring occasionally, until browned and tender, about 8 minutes.</li>
<li>Step 3
Add 1 1/2 cups onion and 1 tablespoon garlic; cook, stirring often, until softened and tender, about 5 minutes.</li>
<li>Step 4
Add 5 ounces spinach; cook, tossing constantly, until wilted, 1 to 2 minutes. Remove from heat.</li>
<li>Step 5
Whisk 6 eggs, 1/4 cup milk, 1/4 cup half-and-half, 1 tablespoon mustard, 1 tablespoon thyme, 1/4 teaspoon salt and 1/4 teaspoon pepper in a medium bowl.</li>
<li>Step 6
Fold in the mushroom mixture and 1 1/2 cups cheese. Spoon into the prepared pie pan.</li>
<li>Step 7
Bake until set and golden brown, about 30 minutes. Let stand for 10 minutes; slice. Garnish with thyme and serve.</li>
</ol>
</p>
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

B-12 vitamin.
<ol>
    <li>Ingredients:</li>
<li>3 cups whole-milk plain Greek yogurt</li>
<li>¼ cup pure maple syrup or honey</li>
<li>1 teaspoon vanilla extract</li>
<li>1 ½ cups sliced strawberries</li>
<li>¼ cup mini chocolate chips</li>
<li>Directions:</li>
<li>Step 1
Line a rimmed baking sheet with parchment paper.</li>
<li>Step 2
Stir yogurt, maple syrup (or honey) and vanilla in a medium bowl. Spread on the prepared baking sheet into a 10-by-15-inch rectangle. Scatter the strawberries on top and sprinkle with chocolate chips.</li>
<li>Step 3
Freeze until very firm, at least 3 hours. To serve, cut or break into 32 pieces.</li>
</ol>
</p>
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
Zinc.
<ol>
    <li>Ingredients:</li>
<li>Cooking spray</li>
<li>2 tablespoons extra-virgin olive oil</li>
<li>¾ cup diced onion</li>
<li>¼ teaspoon salt, divided</li>
<li>1 medium red bell pepper, diced</li>
<li>1 tablespoon finely chopped fresh oregano</li>
<li>8 large eggs</li>
<li>¾ cup crumbled feta cheese</li>
<li>½ cup low-fat milk</li>
<li>½ teaspoon ground pepper</li>
<li>2 cups chopped fresh spinach</li>
<li>¼ cup sliced Kalamata olives</li>
<li>Directions:</li>
<li>Step 1
Preheat oven to 325 degrees F. Liberally coat a 12-cup muffin tin with cooking spray.</li>
<li>Step 2
Heat oil in a large skillet over medium heat. Add onion and 1/8 teaspoon salt; cook, stirring, until starting to soften, about 3 minutes. Add bell pepper and oregano; cook, stirring, until the vegetables are tender and starting to brown, 4 to 5 minutes more. Remove from heat and let cool for 5 minutes.</li>
<li>Step 3
Whisk eggs, feta, milk, pepper and the remaining 1/8 teaspoon salt in a large bowl. Stir in spinach, olives and the vegetable mixture. Divide among the prepared muffin cups.</li>
<li>Step 4
Bake until firm to the touch, about 25 minutes. Let stand for 5 minutes before removing from the tin.</li>
</ol></p>
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
             <p>Salmon is high in omega-3 fatty acids, which reduce inflammation and are important for tissue health, according to Meyer-Jax. It's also high in protein, with a 3.5-ounce serving containing about 20 grammes. Protein aids in the growth and repair of muscles and tissues. Salmon is high in protein, which is important for bone health, preventing muscle loss, and assisting the body in healing and repair. Its high astaxanthin content may help to maintain skin elasticity, reduce ageing signs, and protect the skin from UV damage.
                 <ol>
                     <li>Ingrediennts:</li>
<li>1 cup instant brown rice</li>
<li>1 cup water</li>
<li>4 ounces salmon, preferably wild</li>
<li>1 teaspoon avocado oil</li>
<li>⅛ teaspoon kosher salt</li>
<li>2 tablespoons mayonnaise</li>
<li>1 ½ teaspoons Sriracha</li>
<li>1 ½ teaspoons 50%-less-sodium tamari</li>
<li>1 teaspoon mirin</li>
<li>½ teaspoon freshly grated ginger</li>
<li>¼ teaspoon crushed red pepper</li>
<li>⅛ teaspoon kosher salt</li>
<li>½ ripe avocado, chopped</li>
<li>½ cup chopped cucumber</li>
<li>¼ cup spicy kimchi</li>
<li>12 (4-inch) sheets nori (roasted seaweed)</li>
<li>Directions:</li>
<li>Step 1
Preheat oven to 400ºF. Line a small rimmed baking sheet with foil. Place salmon on the prepared pan. Drizzle with oil; season with salt. Bake until an instant-read thermometer inserted in the thickest part registers 125ºF, 8 to 10 minutes.</li>
<li>Step 2
Meanwhile, cook rice according to package directions. Mix mayonnaise and Sriracha in a small bowl; set aside. Whisk tamari, mirin, ginger, crushed red pepper and salt in another small bowl; set aside.</li>
<li>Step 3
Divide the rice between 2 bowls. Top with salmon, avocado, cucumber and kimchi. Drizzle with the tamari mixture and the mayonnaise mixture. Mix the bowls, if desired, and serve with nori.</li>
                 </ol>
             </p>
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