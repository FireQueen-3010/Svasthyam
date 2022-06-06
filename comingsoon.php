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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
                <li><a href="login-system/register.php">Register</a></li>
                <li><a href="login-system/home.php">Login</a></li>
                <div class="close"><i class="fas fa-times"></i></div>
            </ul>
        </nav>
        <div class="content">
            <h2>This is page is currently under construction!</h2>
</div>
</header>
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

        function show() {
            mainMenu.style.display = 'flex'
            mainMenu.style.right = '0'
        }

        function close() {
            mainMenu.style.right = '-60%'
        }
    </script>
</body>

</html>