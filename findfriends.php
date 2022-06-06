<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Network with others</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="login-system/css/style.css">

</head>
<body>
   
<div class="container">

   <div class="profile" style="margin-right: 2rem;">
    <?php
        //  $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
        //  if(mysqli_num_rows($select) > 0){
        //     $fetch = mysqli_fetch_assoc($select);
        //  }
        //  if($fetch['image'] == ''){
        //     echo '<img src="images/default-avatar.png">';
        //  }else{
        //     echo '<img src="uploaded_img/'.$fetch['image'].'">';
        //  }
      ?> 
      <img src="images/trainer1.jpg">
      <!-- <h3><?php //echo $fetch['name']; ?></h3> -->
      <h3>Ryan Krishna</h3>
      <h4>Age: 30</h4>
      <h4>Height: 183 cms</h4>
      <h4>Weight: 90 kgs</h4>
      <h4>Goals: Get Fit</h4>
   </div>
   <div class="profile">

      <img src="images/trainer2.jpg">
      <h3>Ryan Krishna</h3>
      <h4>Age: 30</h4>
      <h4>Height: 183 cms</h4>
      <h4>Weight: 90 kgs</h4>
      <h4>Goals: Get Fit</h4>
   </div>

</div>

</body>
</html>