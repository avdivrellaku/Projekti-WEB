<?php 
session_start();

if(isset($_SESSION['loginUsername'])){
    header("location:index.php");
}

else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/indexStyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login or Sign Up</title>
   

</head>

<body>

    <div class="banner">
        <div class="logo">

            <a href="index.php"><img id="test" class="img" src="images/logo4.png"></a>

        </div>
        <div class="title" id="title">
            Football Products Shop
        </div>
        <div class="login-cart">
            <a href="form.html"><i title="Click Here to Log In or Sign Up" class="far fa-user fa-customize"></i></a>
            <a href="index.html#about"><i class="fas fa-info fa-customize"
                    title="Click here to know more about us"></i></a>
            <a id="user" href="#contact"><i  class="fas fa-envelope fa-customize"
                    title="Click here to contact us"></i></a>


        </div>
    </div>
    <hr>
    <header>
    </header>
    <main>
    <form id="formlogin" method="post" class="loginform" action="<?php echo $_SERVER['PHP_SELF'] ?>">


<div id="login-items">
    <input type="text" name="loginUsername" id="usernamelogin" placeholder="Username">
    <label id="usernameMs" for="usernamelogin"></label>
    <input type="password" name="loginPassword" id="passwordlogin" placeholder="Password">
    <label id="passwordMs" for="passwordlogin"></label>
</div>
    <div class="no-acc">
        <input type="submit" id="login"  name="loginButton" value="Log In">
        <p>Or</p>
      <a href="form.php"><input type="button"  id="gotosignup" value="Sign Up"></a>
    </div>

</form>
<?php 
include_once 'loginValidation.php';
?>

<?php
}
?>

</main>

<footer>


<div class="footer-box">
<h1>Account</h1>
<a href="form.html">
<h3>Login</h3>
</a>
<a href="form.html">
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








</footer>

<div class="copyright">
Copyright Ⓒ 2021. Football Products Shop. All rights Reserved
</div>
<script src="loginValidation.js"></script>

</body>

</html>