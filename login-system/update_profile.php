<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (isset($_POST['update_profile'])) {

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_height = mysqli_real_escape_string($conn, $_POST['update_height']);
   $update_weight = mysqli_real_escape_string($conn, $_POST['update_weight']);
   $update_age = mysqli_real_escape_string($conn, $_POST['update_age']);
   $update_goal = mysqli_real_escape_string($conn, $_POST['update_goal']);

   mysqli_query($conn, "UPDATE `user_form` SET name = '$update_name', email = '$update_email', height = '$update_height', 
   weight = '$update_weight', age = '$update_age', goal = '$update_goal' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if (!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)) {
      if ($update_pass != $old_pass) {
         $message[] = 'old password not matched!';
      } elseif ($new_pass != $confirm_pass) {
         $message[] = 'confirm password not matched!';
      } else {
         mysqli_query($conn, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/' . $update_image;

   if (!empty($update_image)) {
      if ($update_image_size > 2000000) {
         $message[] = 'image is too large';
      } else {
         $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if ($image_update_query) {
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
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
   <title>Edit Profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="update-profile">

      <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if (mysqli_num_rows($select) > 0) {
         $fetch = mysqli_fetch_assoc($select);
      }
      ?>

      <form action="" method="post" enctype="multipart/form-data">
         <?php
         if ($fetch['image'] == '') {
            echo '<img src="images/default-avatar.png">';
         } else {
            echo '<img src="uploaded_img/' . $fetch['image'] . '">';
         }
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<div class="message">' . $message . '</div>';
            }
         }
         ?>
         <div class="flex">
            <div class="inputBox">
               <span>Username</span>
               <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
               <span>Email</span>
               <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
               <span>Update your avtaar</span>
               <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
               <span>Update Height</span>
               <input type="text" name="update_height" value="<?php echo $fetch['height']; ?>" class="box">
               <span>Update Weight</span>
               <input type="text" name="update_weight" value="<?php echo $fetch['weight']; ?>" class="box">
               <span>Update Age</span>
               <input type="number" name="update_age" value="<?php echo $fetch['age']; ?>" class="box" required>
            </div>
            <div class="inputBox">
               <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
               <span>Old Password</span>
               <input type="password" name="update_pass" placeholder="enter previous password" class="box">
               <span>New Password</span>
               <input type="password" name="new_pass" placeholder="enter new password" class="box">
               <span>Confirm New Password</span>
               <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
               <span>Update Goal</span>
               <label>
                  <select name="update_goal" class="box" value="<?php echo $fetch['goal']; ?>" required>
                     <option value="" selected="Goal">Select Goal</option>
                     <option value="Weight Loss">Lose Weight</option>
                     <option value="Weight Gain">Gain Weight</option>
                     <option value="Stay Fit">Get Fit</option>
               </label>
            </div>
         </div>

         <input type="submit" value="update profile" name="update_profile" class="btn">
         <a href="home.php" class="delete-btn">go back</a>

      </form>

   </div>

</body>

</html>