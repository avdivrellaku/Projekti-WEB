var nameRegex = /^[A-Z][a-z]{1,}/;
var surnameRegex = /^[A-Z][a-z]{1,}/;
var usernameRegex = /[a-z]+[.]+[a-z]+/;
var emailRegex = /[a-z]\w+@[a-z]+[-]?[a-z]\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z][a-z]+\d{3,}[.|,]+/;
var roleRegex = /user|admin/;


var editButton = document.getElementById("editButton");

var nameMsgEdit = document.getElementById("nameMsgEdit");
var surnameMsgEdit = document.getElementById("surnameMsgEdit");
var usernameMsgEdit = document.getElementById("usernameMsgEdit");
var emailMsgEdit = document.getElementById("emailMsgEdit");
var passwordMsgEdit = document.getElementById("passwordMsgEdit");
var roleMsgEdit = document.getElementById("roleMsgEdit");


editButton.addEventListener("click", function (event) {

var nameEdit = document.getElementById("nameEdit").value;
var surnameEdit = document.getElementById("surnameEdit").value;
var usernameEdit = document.getElementById("usernameEdit").value;
var emailEdit = document.getElementById("emailEdit").value;
var passwordEdit = document.getElementById("passwordEdit").value;
var roleEdit = document.getElementById("roleEdit").value;

if (nameEdit == "") {
nameMsgEdit.innerText = "! Fill Name"
event.preventDefault();
}

else {
if (nameRegex.test(nameEdit)) {

    nameMsgEdit.innerText = "";

}
else {
    nameMsgEdit.innerText = "! Name should start with a capital"
    event.preventDefault();
}
}

if (surnameEdit == "") {
surnameMsgEdit.innerText = "! Fill Surname"
event.preventDefault();
}

else {
if (surnameRegex.test(surnameEdit)) {
    surnameMsgEdit.innerText = "";

}
else {
    surnameMsgEdit.innerText = "! Surname should start with a capital"
    event.preventDefault();
}
}

if (usernameEdit == "") {
usernameMsgEdit.innerText = "! Fill Username"
event.preventDefault();
}

else {
if (usernameRegex.test(usernameEdit)) {
    usernameMsgEdit.innerText = "";
}
else {
    usernameMsgEdit.innerText = "! Username must be example.example"
    event.preventDefault();
}
}
if (emailEdit == "") {
emailMsgEdit.innerText = "! Fill Email"
event.preventDefault();
}

else {
if (emailRegex.test(emailEdit)) {
    emailMsgEdit.innerText = "";

}
else {
    emailMsgEdit.innerText = "! Email must be standard"
    event.preventDefault();
}
}

if (passwordEdit == "") {
    passwordMsgEdit.innerText = "! Fill Password"
    event.preventDefault();
}

else {
    if (passwordRegex.test(passwordEdit)) {

        passwordMsgEdit.innerText = "";

    }
    else {
        passwordMsgEdit.innerText = "! Password should start with a capital and end with 3+ numbers and . or ,"
        event.preventDefault();
    }
}

if (roleEdit == "") {
roleMsgEdit.innerText = "! Fill Role"
event.preventDefault();
}

else {
if (roleRegex.test(roleEdit)) {

    roleMsgEdit.innerText = "";

}
else {
    roleMsgEdit.innerText = "! Role must be user or admin"
    event.preventDefault();
}
}


}); 