var usernameRegexlog = /[a-z]+[.]+[a-z]+/;
var passwordRegexlog = /^[A-Z][a-z]+\d{3,}[.|,]+/;

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
            passwordMs.innerText = "! Password should start with a capital and end with 3+ numbers and . or ,"
            event.preventDefault();
        }
    }
});