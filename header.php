<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Css link -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/cart.css">
    <title>Ecommerce Website</title>
</head>

<body>
    <!-- Ecommerce Website  -->


    <!-- login form -->
    <div class="form_container">
        <div class="form_head_con">
            <h1 class="form_head">Log in</h1>
            <i class="fa-solid fa-xmark cross"></i>
        </div>
        <form action="#" method="POST">
            <div class="user_name">
                <input type="text" placeholder="Enter Your name" class="text">
            </div>

            <div class="user_email">
                <input type="text" placeholder="Enter Your email" class="text">
            </div>

            <div class="user_name">
                <input type="password" placeholder="Enter Your password" class="text">
            </div>
            <a class="forgot">Forgot password?</a>
            <!-- button -->
            <div class="submit_btn">
                <button class="sumbit">Submit</button>
            </div>
        </form>

        <!-- log in with others -->
        <div class="login_others">
            <h3 class="others">OR</h3>
        </div>
        <!-- icons -->
        <div class="other_icon">
            <i class="fa-brands fa-google icon_log"></i>
            <i class="fa-brands fa-facebook-f icon_log"></i>
            <i class="fa-brands fa-twitter icon_loga"></i>
        </div>
    </div>





    <!-- starting header section -->
    <header>

        <div class="header_container">

            <!-- logo start-->
            <div class="logo_container">
                <a href="#" class="logo_link"><img src="Images/logo-01.png" alt="Naveed G" class="logo"></a>
            </div>
            <!-- logo end -->

            <!-- Menu button -->
            <div class="menu_btn">
                <i class="fa-solid fa-bars menu"></i>
            </div>
            <!-- Menu button end -->

            <!-- Close button -->
            <div class="close_btn">
                <i class="fa-solid fa-xmark close"></i>
            </div>
            <!-- Close button end -->


            <!-- navigation bar starts -->
            <div class="nav_container">
                <ul class="nav_bar">
                    <li class="nav_list"><a href="#" class="nav_link active_nav">HOME</a></li>
                    <li class="nav_list"><a href="#" class="nav_link ">ABOUT</a></li>
                    <li class="nav_list"><a href="product.php" class="nav_link ">CATEGORIES</a></li>
                    <li class="nav_list"><a href="#" class="nav_link">CONTACT</a></li>
                    <li class="nav_list"><a href="#" class="nav_link login">LOG IN</a></li>

                    <!-- cart icon -->
                    <i class="fa-solid fa-cart-shopping cart"></i>

                </ul>

            </div>
            <!-- navigation bar ends -->
        </div>

    </header>
    <!-- end header section -->


    <!-- hero section starts -->
    <section>

        <main>

            <!-- background color -->
            <div class="hero_container">

                <!-- images starts -->
                <div class="image_container">
                    <img src="Images/hero-01.png" alt="Naveed" class="hero_image">
                </div>
                <!-- images ends -->

                <!-- hero content starts  -->
                <div class="hero_content">
                    <h1 class="hero_head">Winter Sale</h1>
                    <p class="hero_para">Now get everything on 35% off</p>
                    <!-- explore more button -->
                    <button class="explore_more">Explore more</button>
                </div>
                <!-- hero content ends  -->

            </div>

        </main>

    </section>
    <!-- hero section ends -->
