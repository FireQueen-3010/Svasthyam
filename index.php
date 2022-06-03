<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Awesome Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Svasthyam | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Start Header -->
    <header>
        <nav>
            <div class="logo">SV<span>ASTH</span>YAM</div>
            <div class="open"><i class="fas fa-bars"></i></div>
            <ul class="links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#blogs">Blogs</a></li>
                <li><a href="Regform.php">Register</a></li>
                <li><a href="Loginform.php">Login</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
        <div class="content">
            <h2>A Guide to a Healthy and Fit You</h2>
            <button class="btn-get"><a href="Regform.php">Get Started</a></button>
        </div>
    </header>
    <!-- Start Services -->
    <section id="services">
        <h1>Our Services</h1>
        <div class="container">
            <div class="box">
                <img src="./images/1.jpg">
                <div class="info">
                    <h3>Motivational Stories</h3>
                    <p>Everyone wishes to be successful and live a healthy lifestyle. We need motivation to do all of the work necessary to achieve our goals, and we also need motivation to work out. Which we provide to our customers in order for them to work hard whenever they feel unmotivated to work out.</p>
                    <!-- <button class="btn">more</button> -->
                </div>
            </div>
            <div class="box">
                <img src="./images/2.jpg">
                <div class="info">
                    <h3>Live Body Weight Workouts</h3>
                    <p>Body-weight training, or resistance training with only your body weight, can be an effective type of strength training and a good addition to your fitness programme. Bodyweight training can be just as effective as free weights or weight machines.</p>
                    <!-- <button class="btn">more</button> -->
                </div>
            </div>
            <div class="box">
                <img src="./images/3.jpg">
                <div class="info">
                    <h3>Network With Others</h3>
                    <p>Some people prefer to work out alone, while others prefer to work out in groups, whether it's through regular dance forms or weight-training with your friends in gyms or even while going for an evening walk! We assist you in networking with others based on your workout preference!</p>
                    <!-- <button class="btn">more</button> -->
                </div>
            </div>
            <div class="box">
                <img src="./images/4.jpg">
                <div class="info">
                    <h3>Find Health Recipes</h3>
                    <p>When it comes to your body, you can't just change it by lifting weights or walking for miles and miles on the treadmill or sweating for hours and hours at Zumba! There should be some mechanism that occurs from within as well. As a result, we provide healthy and delicious recipes here.</p>
                    <!-- <button class="btn">more</button> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Start Blog -->
    <section id="blogs">
        <div class="row">
            <div class="image">
                <img src="./images/about.jpg">
            </div>
            <div class="content">
                <h1>Fitness Blog</h1>
                <p>In today's world, fitness has become so important because modern work has become so stressful that we don't care about our health until it is severely harmed or at risk!</p>
                <p>So, as everything has become a doorstep delivery for us in today's world, we provide you with a fitness centre at your doorstep. We assist you in making time for your workout and in networking with others who have similar workout preferences as your workout partner! This way, you can make new friends while also improving your health!</p>
                <button class="btn"><a href="Regform.php">Learn more</a></button>
            </div>
        </div>
    </section>
    <!-- Start Register -->
    <!-- <section class="register">
        <h1>register</h1>
        <form>
            <div class="input_box">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="last Name">
            </div>
            <div class="input_box">
                <input type="email" placeholder="your email">
                <input type="number" placeholder="your number">
            </div>
            <textarea cols="30" rows="10" placeholder="Tell us your requirements"></textarea>
            <input type="submit" value="connect" class="btn">
        </form>
    </section> -->
    <!-- Start Footer -->
    <footer>
        &copy; Svasthyam 2022
    </footer>










    <!-- Javascript Section -->
    <script>
        var mainMenu = document.querySelector('.links')
        var openMenu = document.querySelector('.open')
        var closeMenu = document.querySelector('.close')

        openMenu.addEventListener('click', show)
        closeMenu.addEventListener('click', close)

        function show(){
            mainMenu.style.display = 'flex'
            mainMenu.style.right = '0'
        }
        function close(){
            mainMenu.style.right = '-60%'
        }
    </script>
</body>
</html>