var nameRegex = /^[A-Z][a-z]{1,}/;
var surnameRegex = /^[A-Z][a-z]{1,}/;
var usernameRegex = /[a-z]+[.]+[a-z]+/;
var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,4}/;
var passwordRegex = /^[A-Z].{7,14}/;



var registerButton = document.getElementById("register");
var nameMsg = document.getElementById("nameMsg");
var surnameMsg = document.getElementById("surnameMsg");
var usernameMsg = document.getElementById("usernameMsg");
var emailMsg = document.getElementById("emailMsg");
var passwordMsg = document.getElementById("passwordMsg");
var roleMsg = document.getElementById("roleMsg");



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
            passwordMsg.innerText = "! Password length should be 8-15 characters and start with a capital letter"
            event.preventDefault();
        }
    }


});
