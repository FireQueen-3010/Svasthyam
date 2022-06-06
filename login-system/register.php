<?php

include 'config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $height = mysqli_real_escape_string($conn, $_POST['height']);
   $weight = mysqli_real_escape_string($conn, $_POST['weight']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $goal = mysqli_real_escape_string($conn, $_POST['goal']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/' . $image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select) > 0) {
      $message[] = 'user already exist';
   } else {
      if ($pass != $cpass) {
         $message[] = 'confirm password not matched!';
      } elseif ($image_size > 2000000) {
         $message[] = 'image size is too large!';
      } else {
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, height, weight, age, goal, image) VALUES('$name', '$email', '$pass', '$height', '$weight', '$age', '$goal', '$image')") or die('query failed');

         if ($insert) {
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         } else {
            $message[] = 'registeration failed!';
         }
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post" enctype="multipart/form-data">
         <h3>register now</h3>
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<div class="message">' . $message . '</div>';
            }
         }
         ?>
         <input type="text" name="name" placeholder="Enter your prefered username" class="box" required>
         <input type="email" name="email" placeholder="Enter your email" class="box" required>
         <input type="password" name="password" placeholder="Enter password" class="box" required>
         <input type="password" name="cpassword" placeholder="Confirm Password" class="box" required>
         <input type="number" name="height" placeholder="Enter your Height in cm" class="box" required>
         <input type="number" name="weight" placeholder="Enter your Weight in kg" class="box" required>
         <input type="number" name="age" class="box" placeholder="Enter your age" required>
         <select name="goal" class="box" placeholder="Select your Fitness Goal" required>
            <option value="" selected="Goals">Select Fitness Goal</option>
            <option value="Weight Loss">Lose Weight</option>
            <option value="Weight Gain">Gain Weight</option>
            <option value="Stay Fit">Get Fit</option>
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png" placeholder="upload an avtaar">
            <input type="submit" name="submit" value="Register Now" class="btn">
            <button class="btn-get"><a href="../index.php">Go to home</a></button>

            <p>Already have an account? <a href="login.php">Login now!</a></p>
      </form>

   </div>

</body>

</html>