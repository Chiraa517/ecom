<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Css link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/cart.css">
    <title>Ecommerce Website</title>
</head>

<body>
    <!-- Ecommerce Website  -->



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
                    <li class="nav_list"><a href="#" class="nav_link ">CATEGORIES</a></li>
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
                    <h1 class="hero_head">Cart</h1>
                    <p class="hero_para">Buy our best products</p>
                    <!-- explore more button -->
                    <button class="explore_more">Buy Now!</button>
                </div>
                <!-- hero content ends  -->

            </div>

        </main>

    </section>
    <!-- hero section ends -->


    <!-- Cart container starts -->

    <div class="cart_container">

        <div class="cart_table">

            <!-- table for cart items -->
            <table class="table">
                <thead class="t_head">
                    <tr>
                        <th class="t_header">No</th>
                        <th class="t_header">Items</th>
                        <th class="t_header">Quantity</th>
                        <th class="t_header">Price</th>
                        <th class="t_header">Total Price</th>
                        <th class="t_header">Action</th>
                    </tr>
                </thead>

                <!-- table body -->
                <tbody class="t_body">
                    <tr>
                        <td class="t_d">1</td>
                        <td class="t_d">Lotion</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$500</td>
                        <td class="t_d">$500</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>
                    <!-- </tbody> -->


                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">2</td>
                        <td class="t_d">Face wash</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$99</td>
                        <td class="t_d">$99</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">3</td>
                        <td class="t_d">Cream</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$230</td>
                        <td class="t_d">$230</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">4</td>
                        <td class="t_d">Product</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$300</td>
                        <td class="t_d">$300</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">4</td>
                        <td class="t_d">Product</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$300</td>
                        <td class="t_d">$300</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">4</td>
                        <td class="t_d">Product</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$300</td>
                        <td class="t_d">$300</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">4</td>
                        <td class="t_d">Product</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$300</td>
                        <td class="t_d">$300</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">4</td>
                        <td class="t_d">Product</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$300</td>
                        <td class="t_d">$300</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">4</td>
                        <td class="t_d">Product</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$300</td>
                        <td class="t_d">$300</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>




                    <!-- one more -->

                    <!-- table body -->
                    <!-- <tbody class="t_body"> -->
                    <tr>
                        <td class="t_d">4</td>
                        <td class="t_d">Product</td>
                        <!-- quantity min max  -->
                        <td class="t_d">
                            <input type="number" min="1" max="5" class="quantity">
                        </td>

                        <td class="t_d">$300</td>
                        <td class="t_d">$300</td>
                        <!-- button for remove cart items -->
                        <td class="t_d">
                            <button class="remove">Remove</button>
                        </td>
                    </tr>
                </tbody>






            </table>
            <!-- table for cart items end -->

        </div>

    </div>


    <!-- Cart container ends -->


    <!-- cart detail in card -->
    <div class="card_container">
        <!-- details content -->
        <div class="content_contaienr">
            <div class="header">
                <h1 class="head">Cart</h1>
            </div>
            <hr>
            <!-- total amount -->
            <div class="total_amount">
                <h2 class="amount">Total Amount</h2>
                <p class="amount">$500</p>
            </div>
            <!-- buttons -->
            <div class="buttons_container">
                <button class="clear_cart">Clear Cart</button>
                <button class="Continue_btn">Continue</button>
            </div>
        </div>
    </div>
    <!-- cart detail in card end -->




















    <!-- Footer section starts -->

    <div class="footer_container">

        <!-- flex container -->
        <div class="footer_flex">


            <!-- colum 1 starts -->

            <div class="col-1">
                <ul class="col_container">
                    <li class="logo"><a href="#" class="logo_link"> <img src="Images/logo-01.png" alt="Naveed"
                                width="80px"></a></li>
                    <li class="col_1_content">You can find amazing
                        quality producsts at LOGO</li>
                    <li class="icons_col_1">
                        <a href="#" class="col_1_link"><i class="fa-brands fa-twitter col_1_icon"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram col_1_icon"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok col_1_icon"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook col_1_icon"></i></a>
                    </li>
                </ul>

            </div>

            <!-- colum 1 end -->

            <!-- colum 2 starts -->

            <div class="col_2">

                <ul class="col_2_conntainer">
                    <h3 class="list_head">Company</h3>
                    <li class="col_2_list"><a href="#" class="col_2_link">About us</a></li>
                    <li class="col_2_list"><a href="#" class="col_2_link">Contact</a></li>
                    <li class="col_2_list"><a href="#" class="col_2_link">Work with us</a></li>
                </ul>

            </div>

            <!-- colum 2 end -->

            <!-- colum 3 starts -->

            <div class="col_3">

                <ul class="col_2_conntainer">
                    <h3 class="list_head">Top products</h3>
                    <li class="col_2_list"><a href="#" class="col_2_link">Face Wash</a></li>
                    <li class="col_2_list"><a href="#" class="col_2_link">Lotion</a></li>
                    <li class="col_2_list"><a href="#" class="col_2_link">Top products</a></li>
                </ul>


            </div>

            <!-- colum 3 end -->

            <!-- colum 4 starts -->

            <div class="col_4">


                <ul class="col_2_conntainer">
                    <h3 class="list_head">Address</h3>
                    <li class="col_2_list"><a href="#" class="col_2_link">Muzaffarabad</a></li>
                    <li class="col_2_list"><a href="#" class="col_2_link">myWeb@gamil.com</a></li>
                    <li class="col_2_list"><a href="#" class="col_2_link">+92-457624825</a></li>
                </ul>

            </div>

            <!-- colum 4 end -->

        </div>


    </div>

    <!-- copy rights -->
    <div class="copy_right">
        <p class="copy_content">Copyright &copy; all rights reserved</p>
    </div>
    <!-- Footer section ends -->



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



    <!-- JS link -->
    <script src="./js/program.js"></script>

</body>

</html>
