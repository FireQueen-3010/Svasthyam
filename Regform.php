<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
      body {
        font-family: 'Open Sans', sans-serif;
        background-color: #E1DCED;
      }
    </style>
 </head>
<body>
<header>
        <nav>
            <div class="logo">SV<span>ASTH</span>YAM</div>
            <div class="open"><i class="fas fa-bars"></i></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="Loginform.php">Login</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
        <div class="content">
            <!-- <h1>Login now</h1> -->
            <button class="btn-get"><a href="#register">Register Below</a></button>
        </div>
    </header>
      
    <div style="display: flex; align-items:center;"> 
    <div style="margin-top:10rem; margin-left: 30rem;"class="col-sm-12 col-md-5 col-lg-4 col-xl-4">
      <form action="registration.php" method="post">
      <div class="container bg-reg" id="register">
          <h1 class="display-6 p">Register here</h1>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" name="s_name" id="name" placeholder="Your name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="s_email" id="email" placeholder="email@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" name="s_password" id="password" placeholder="password">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Re-enter password">
          </div>
          <button type="submit" name="submit" onclick="submitform()" class="btn btn-white">Submit</button>
        </div>
      </form>
    </div>
</div>
  </div>
</div>
<br>
<br>
<footer>
        &copy; Svasthyam 2022
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
  function submitform(){
     let name=document.querySelector("#name").value;
     let email=document.querySelector("#email").value;
     let password=document.querySelector("#password").value;
     let cpassword=document.querySelector("#confirm_password").value;
     if(
       name !="" &&
       email !="" &&
       password !="" &&
       cpassword !=""
     )
     {
      if(password != cpassword){
      alert("Password should be same");
     }
     else{
      alert(name+" your are successfully registered with "+email);
     }
     }else{
      alert("Enter all fields");
     }  
  }
  </script>
</html>