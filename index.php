<?php

session_start();



include_once 'productRepository.php';



$productRepository = new ProductRepository();

$productsNew = $productRepository->getProductsByCategory('newest');

$productsSold = $productRepository->getProductsByCategory('sold');

$productsRecommend = $productRepository->getProductsByCategory('recommended');




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Sign Up</title>
    <style>
        .hide {
            display: none;
        }
    </style>

</head>

<body>




    <div class="banner">
        <div class="logo">

            <a href="index.php"><img id="test" class="img" src="images/logo4.png"></a>

        </div>
        <div class="title" id="title">
            Football Products Shop
        </div>
        <div style="width:20%;" class="login-cart">
            <div style="display:flex;justify-content:flex-end;width:25%;margin-left:15%" class="user-session">
                <?php if (!isset($_SESSION['username'])) {
                    echo "<a href='form.php'><i title='Click Here to Log In or Sign Up'  class='far fa-user fa-customize'></i></a>";
                } else {

                    echo "<a style='text-decoration:none;color:black;' href='profile.php'><p>" . $_SESSION['username'] . "</p></a>";
                }

                ?>
            </div>
            <a href="#about"><i class="fas fa-info fa-customize" title="Click here to know more about us"></i></a>
            <a href="#contact"><i id="user" class="fas fa-envelope fa-customize" title="Click here to contact us"></i></a>



        </div>
    </div>
    <hr>
    <header>


        <ul class="navigation">
            <li><a a href="index.php" id="active">Home</a></li>
            <li><a href="jerseys.php">Jerseys</a></li>
            <li><a href="shoes.php">Shoes</a></li>
            <li><a href="tshirts.php">T-Shirts</a></li>
            <li><a href="other.php">Other</a></li>

        </ul>
        
    </header>
    <hr class="hrtest">
    <main>


        <div class="slides">
            <div class="slider-text">FOOTBALL SHOP<br> <span id="slider-text">Shop with us for the cheapest prices
                    and the highest quality products
                </span></div>
            <div id="slides-pics" class="slides-pics">

            </div>

        </div>

        <hr>


       
            <div class="tekst">
                Newest Products
            </div>
            <div class="boxes">
                <?php
                foreach ($productsNew as $productNew) {
                    echo "
                <div class='box'>
                    <img src='images/$productNew[imageName]'>
                    <div class='product-desc'>
                        <div class='emri-cmimi'>
                            <p class='name'>$productNew[productName]</p>
                            <p class='price'>$$productNew[price]</p>

                        </div>
                        <a href='#'><input class='buy-button' type='button' value='Buy Now'></a>
                    </div>
                    </div>  
                    ";
                }
                ?>



            </div>
       
      
            <div class="tekst">
               Most Sold Products
            </div>
            <div class="boxes">
                <?php
                foreach ($productsSold as $productSold) {
                    echo "
                <div class='box'>
                    <img src='images/$productSold[imageName]' >
                    <div class='product-desc'>
                        <div class='emri-cmimi'>
                            <p class='name'>$productSold[productName]</p>
                            <p class='price'>$$productSold[price]</p>

                        </div>
                        <a href='#'><input class='buy-button' type='button' value='Buy Now'></a>
                    </div>

                    
                    </div>
                    ";
                }
                ?>



            </div>
        
        
            <div class="tekst">
                Recommended Products
            </div>
            <div class="boxes">
                <?php
                foreach ($productsRecommend as $productRecommend) {
                    echo "
                <div class='box'>
                    <img src='images/$productRecommend[imageName]'>
                    <div class='product-desc'>
                        <div class='emri-cmimi'>
                            <p class='name'>$productRecommend[productName]</p>
                            <p class='price'>$$productRecommend[price]</p>

                        </div>
                        <a href='#'><input class='buy-button' type='button' value='Buy Now'></a>
                    </div>
                    </div>
                    ";
                }
                ?>



            </div>
       
        <hr>
        <div id="about">
            <div class="title">
                About Us
            </div>
            <div class="about-description">
                <div class="tekst-about">
                    <div class="tekst-paragraph">
                        <h3>Who are we?</h3>
                        <p>We are an online store established in 2019 that sells all kinds of
                            football products. Our products are the highest quailty and authentic from the most popular
                            brands.
                            We have partnered with these brands such as Nike, Adidas & Puma to bring you the best
                            product for cheaper prices.
                        </p>
                    </div>
                    <div class="tekst-paragraph">
                        <h3>Payment Methods</h3>
                        <p>We offer different kinds of payment methods. You can pay with credit and debit card, PayPal
                            and for orders
                            made inside Kosovo we offer cash payment after you have recieved your product.
                        </p>
                    </div>
                    <div class="tekst-paragraph">
                        <h3>Shipping Time</h3>
                        <p>Shipping time varies depending where you live. If you live in Kosovo and the product you
                            ordered is in stock, it
                            arrives inside 24 hours but if you live somewhere else in Europe it can take up to 1 week
                            and up to 2-3 weeks for
                            other continents. If the product is not on stock it takes 1-2 weeks more.
                        </p>
                    </div>
                </div>

                <div class="description-img" style="background-image: url(images/aboutphoto.png);">

                </div>
            </div>
        </div>

    </main>




    <footer>


        <div class="footer-box">
            <h1>Account</h1>
            <a href="login.php">
                <h3>Login</h3>
            </a>
            <a href="form.php">
                <h3>Register</h3>
            </a>
            <h3>Forgot Password?</h3>

        </div>

        <div class="footer-box">
            <h1 id="contact">Contact Us</h1>
            <textarea style="resize:none;color:black;background-color:white;" rows="5" cols="43">Type your message here</textarea>
            <div class="email-submit">
                <input style="color:black;" type="email" id="contact-email" placeholder="email">
                <button id="submit-email-button" style="color:black;" type="submit">Send</button>
            </div>

        </div>


        <div class="footer-box">
            <h1>Follow us on Social Media</h1>
            <div class="socials">
                <a href="https://facebook.com"><img src="images/facebook.png"></a>
                <a href="https://instagram.com"><img src="images/instagram.png"></a>
                <a href="https://twitter.com"><img src="images/twitter.png"></a>

            </div>
            <h2>Our Partners</h2>
            <div class="partners">
                <a href="https://nike.com"><img src="images/nikelogo.png"></a>
                <a href="https://adidas.com"><img src="images/adidas-logo.png"></a>
                <a href="https://us.puma.com"><img src="images/puma-logo.png"></a>
            </div>
        </div>
    </footer>

    <div class="copyright">
        Copyright Ⓒ 2021. Football Products Shop. All rights Reserved
    </div>

    <script src="slider.js"></script>
    <script src="javascript.js"></script>
</body>

</html>