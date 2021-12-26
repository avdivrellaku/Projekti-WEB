



/* NDERRIMET NGA LOGIN NE SIGNUP*/
var gotologin = document.getElementById("gotologin");
var gotosignup = document.getElementById("gotosignup");
var signupform = document.getElementById("formsignup");
var loginform = document.getElementById("formlogin");

gotologin.addEventListener("click", function () {
    signupform.style.display = "none";
    loginform.style.display = "flex";

});

gotosignup.addEventListener("click", function () {
    loginform.style.display = "none";
    signupform.style.display = "flex";

});
/*LOG IN */
var usernameRegexlog = /[a-z]+[.]+[a-z]+/;
var passwordRegexlog = /^[A-Z]\w+[a-z]\d{3}/;

var loginButton = document.getElementById("login");
var usernameMs = document.getElementById("usernameMs");
var passwordMs = document.getElementById("passwordMs");



loginButton.addEventListener("click", function (event) {
    var usernamelogin = document.getElementById("usernamelogin").value;
    var passwordlogin = document.getElementById("passwordlogin").value;

    if (usernamelogin == "") {
        usernameMs.innerText = "! Fill Username"
        event.preventDefault();
    }

    else {
        if (usernameRegexlog.test(usernamelogin)) {
            usernameMs.innerText = "";
        }
        else {
            usernameMs.innerText = "! Username must be example.example"
            event.preventDefault();
        }
    }

    if (passwordlogin == "") {
        passwordMs.innerText = "! Fill Password"
        event.preventDefault();
    }

    else {
        if (passwordRegexlog.test(passwordlogin)) {

            passwordMs.innerText = "";

        }
        else {
            passwordMs.innerText = "! Password should start with a capital and end with 3 numbers"
            event.preventDefault();
        }
    }
});
/*SIGN UP*/
var nameRegex = /^[A-Z][a-z]{1,}/;
var surnameRegex = /^[A-Z][a-z]{1,}/;
var usernameRegex = /[a-z]+[.]+[a-z]+/;
var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z]\w+[a-z]\d{3}/;


var registerButton = document.getElementById("register");
var nameMsg = document.getElementById("nameMsg");
var surnameMsg = document.getElementById("surnameMsg");
var usernameMsg = document.getElementById("usernameMsg");
var emailMsg = document.getElementById("emailMsg");
var passwordMsg = document.getElementById("passwordMsg");

registerButton.addEventListener("click", function (event) {

    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    if (name == "") {
        nameMsg.innerText = "! Fill Name"
        event.preventDefault();
    }

    else {
        if (nameRegex.test(name)) {

            nameMsg.innerText = "";

        }
        else {
            nameMsg.innerText = "! Name should start with a capital"
            event.preventDefault();
        }
    }

    if (surname == "") {
        surnameMsg.innerText = "! Fill Surname"
        event.preventDefault();
    }

    else {
        if (surnameRegex.test(surname)) {
            surnameMsg.innerText = "";

        }
        else {
            surnameMsg.innerText = "! Surname should start with a capital"
            event.preventDefault();
        }
    }

    if (username == "") {
        usernameMsg.innerText = "! Fill Username"
        event.preventDefault();
    }

    else {
        if (usernameRegex.test(username)) {
            usernameMsg.innerText = "";
        }
        else {
            usernameMsg.innerText = "! Username must be example.example"
            event.preventDefault();
        }
    }
    if (email == "") {
        emailMsg.innerText = "! Fill Email"
        event.preventDefault();
    }

    else {
        if (emailRegex.test(email)) {
            emailMsg.innerText = "";

        }
        else {
            emailMsg.innerText = "! Email must be standard"
            event.preventDefault();
        }
    }

    if (password == "") {
        passwordMsg.innerText = "! Fill Password"
        event.preventDefault();
    }

    else {
        if (passwordRegex.test(password)) {

            passwordMsg.innerText = "";

        }
        else {
            passwordMsg.innerText = "! Password should start with a capital and end with 3 numbers"
            event.preventDefault();
        }
    }


});