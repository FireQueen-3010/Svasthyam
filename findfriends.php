<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Network with others</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-system/css/style.css">
  

</head>
<body>
<header>
     <nav>
       <div class="logo">SV<span>ASTH</span>YAM</div>
       <div class="open"><i class="fas fa-bars"></i></div>
       <ul class="links">
         <li><a href="index.php">Home</a></li>
         <li><a href="#network" class="active">Network with Others</a></li>
         <li><a href="login-system/home.php">Dashboard</a></li>
         <div class="close"><i class="fas fa-times"></i></div>
       </ul>
     </nav>
     <div class="content">
       <h2>Network with Others</h2>
       <button class="btn-get"><a href="#network">Find Profiles</a></button>
     </div>
   </header> 
<div class="container" id="network">

<div class="profile" style="display: flex; flex-direction: row; margin-right: 1rem; flex-wrap:wrap;">
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
      <div>
      <h3>Ryan Krishna</h3>
      <h4>Age: 30</h4>
      <h4>Height: 183 cms</h4>
      <h4>Weight: 90 kgs</h4>
      <h4>Goals: Get Fit</h4>
     </div>
   </div>
   <div class="profile" style="display: flex; flex-direction: row; margin-right: 1rem; flex-wrap:wrap;">

      <img src="images/trainer2.jpg">
      <div>
      <h3>Rishabh Malhotra</h3>
      <h4>Age: 26</h4>
      <h4>Height: 168 cms</h4>
      <h4>Weight: 75 kgs</h4>
      <h4>Goals: Get Fit</h4>
     </div>
   </div>
   <div class="profile" style="display: flex; flex-direction: row; margin-right: 1rem; flex-wrap:wrap;">

      <img src="images/trainer3.jpg">
      <div>
      <h3>Mansi Shah</h3>
      <h4>Age: 21</h4>
      <h4>Height: 160 cms</h4>
      <h4>Weight: 45 kgs</h4>
      <h4>Goals: Gain weight</h4>
     </div>
        </div>
           <div class="profile" style="display: flex; flex-direction: row; margin-right: 1rem; flex-wrap:wrap;">

      <img src="images/trainer4.jpg">
      <div>
      <h3>Rohan Dev</h3>
      <h4>Age: 26</h4>
      <h4>Height: 175 cms</h4>
      <h4>Weight: 45 kgs</h4>
      <h4>Goals: Gain weight</h4>
     </div>
        </div>
        <div class="profile" style="display: flex; flex-direction: row; margin-right: 1rem; flex-wrap:wrap;">

<img src="images/trainer5.jpg">
<div>
<h3>Sasha Dilak</h3>
<h4>Age: 26</h4>
<h4>Height: 168 cms</h4>
<h4>Weight: 105 kgs</h4>
<h4>Goals: loose weight</h4>
</div>
        </div>
        <div class="profile" style="display: flex; flex-direction: row; margin-right: 1rem; flex-wrap:wrap;">

<img src="images/trainer6.jpg">
<div>
<h3>Diksha Sharma</h3>
<h4>Age: 24</h4>
<h4>Height: 145 cms</h4>
<h4>Weight: 45 kgs</h4>
<h4>Goals: Gain weight</h4>
</div>
</div

</div>

</body>
</html>