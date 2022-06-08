<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
};

if (isset($_GET['logout'])) {
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Dashboard</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="container">

      <div class="profile">
         <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
         }
         if ($fetch['image'] == '') {
            echo '<img src="images/default-avatar.png">';
         } else {
            echo '<img src="uploaded_img/' . $fetch['image'] . '">';
         }
         ?>
         <h3><?php echo $fetch['name']; ?></h3>
         <div style="display:flex; flex-direction:row; flex-wrap: wrap; justify-content: space-evenly; margin-top: 1rem;">
            <h4><span style="color:#5D4697;">Height: </span><?php echo $fetch['height']; ?>cms </h4>
            <h4><span style="color:#5D4697;">Weight: </span><?php echo $fetch['weight']; ?>kgs </h4>
         </div>
         <div style="display:flex; flex-direction:row; flex-wrap: wrap; justify-content: space-evenly; margin-top: 1rem; margin-bottom: 1rem;">
            <h4><span style="color:#E74C3C;">Age: </span><?php echo $fetch['age']; ?> </h4>
            <h4><span style="color:#E74C3C;">Goal: </span><?php echo $fetch['goal']; ?> </h4>
         </div>
         <a href="update_profile.php" class="btn">Edit Profile</a>
         <a href="../findfriends.php" class="btn">Find other users</a>
         <a href="../recipes.php" class="btn">Find healthy recipes</a>
         <a href="../motivation.php" class="btn">Browse Motivational Stories</a>
         <a href="../workout.php" class="btn">Checkout Workout videos!</a>
         <a href="../blog.php" class="btn">Browse Fitness Blog</a>
         <a href="../index.php" class="btn">Back Home</a>
         <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">Logout</a>
         <p>New <a href="login.php">Login</a> or <a href="register.php">Register</a></p>
      </div>

   </div>

</body>

</html>