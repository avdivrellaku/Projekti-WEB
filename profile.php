<?php

session_start();
$hide = "";
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} else {
    if ($_SESSION['role'] == "admin") {
        $hide = "";
    } else {
        $hide = "hide";
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="indexStyle.css">
        <link rel="stylesheet" href="css/all.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .hide {
                display: none;
                
            }
            .profile-items{
                display: flex;
                justify-content: space-evenly;
                width: 40%;
                align-items: center;
                
            }

            main{
                display: flex;
                align-items: flex-start;
                justify-content: center;
            }


          main  a{
            text-decoration:none;
            color:black;
            padding:5px;
            border:1px solid #2d2d44;
            border-radius: 10px;
            transition: .5s ease;
            height: 20px;
       }

       main a:hover{
        color:white;
        background-color: #2d2d44;
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
            <a href="index.php#about"><i class="fas fa-info fa-customize" title="Click here to know more about us"></i></a>
            <a href="#contact"><i id="user" class="fas fa-envelope fa-customize" title="Click here to contact us"></i></a>



        </div>
    </div>
    <hr>

       
        <main style="height: 500px;">
        <div class="profile-items">
        <?php echo "<p>Hi, ".$_SESSION['name']." ".$_SESSION['surname']."</p>"?>
        <a href='dashboard.php' class="<?php echo $hide ?>">Dashboard</a>
        <a href="logout.php">Log out</a>
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
        <button id="submit-email-button" style="background-color:white;color:black;" type="submit">Send</button>
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
Copyright Ⓒ 2022. Football Products Shop. All rights Reserved
</div>
<?php
}
?>
    </body>
    </html>
