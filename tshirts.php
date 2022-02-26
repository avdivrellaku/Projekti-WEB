
<?php
$hide = "";
session_start();
include_once 'productRepository.php';
$productRepository = new ProductRepository();

$tshirts = $productRepository->getProductsByType('tshirt');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
    <link rel="stylesheet" href="css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirts</title>

</head>

<body>
    <div class="banner">
        <div class="logo">
            <a href="index.php"><img id="test" class="img" src="images/logo4.png"></a>

        </div>
        <div class="title">
            Football Products Shop
        </div>
        <div style="width:20%;" class="login-cart">
            <div style="display:flex;justify-content:flex-end;width:25%;margin-left:15%"class="user-session">
           <?php if(!isset($_SESSION['username'])){
    echo "<a href='form.php'><i title='Click Here to Log In or Sign Up'  class='far fa-user fa-customize'></i></a>";
        }
        else{ 

            echo "<a style='text-decoration:none;color:black;' href='profile.php'><p>".$_SESSION['username']."</p></a>"; 
        }
           
        ?>
        </div>
            <a href="#about"><i class="fas fa-info fa-customize" title="Click here to know more about us"></i></a>
            <a href="#contact"><i id="user" class="fas fa-envelope fa-customize"
                    title="Click here to contact us"></i></a>



        </div>
    </div>
    <hr>
    <header>



        <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="jerseys.php">Jerseys</a></li>
            <li><a href="shoes.php">Shoes</a></li>
            <li><a href="tshirts.php" id="active">T-Shirts</a></li>
            <li><a href="other.php">Other</a></li>


        </ul>
    </header>
    <main>
    <div class="products">
            <div class="boxes">
                <?php
            foreach($tshirts as $tshirt){
                        echo "
                <div class='box' style='width:340px; padding-top:10px;'>
                    <img src='images/$tshirt[imageName]'>
                    <div class='product-desc'>
                        <div class='emri-cmimi'>
                            <p class='name'>$tshirt[productName]</p>
                            <p class='price'>$$tshirt[price]</p>

                        </div>
                        <a href='#'><input class='buy-button' type='button' value='Buy Now'></a>
                    </div>
                    </div>
                    ";
                }
                ?> 
            
                     
                      
                   </div>
                </div>
    </main>
    </main>

    <footer>
        <div class="footer-box">
            <h1>Account</h1>
            <a href="form.php">
                <h3>Login</h3>
            </a>
            <a href="form.php">
                <h3>Register</h3>
            </a>
            <h3>Forgot Password?</h3>

        </div>

        <div class="footer-box">
            <h1 id="contact">Contact Us</h1>
            <textarea rows="5" cols="43">Type your message here</textarea>
            <div class="email-submit">
                <input type="email" id="contact-email" placeholder="email">
                <button id="submit-email-button" type="submit">Send</button>
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

</body>

</html>