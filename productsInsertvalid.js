var nameRegex = /\w* *-*/;
var typeRegex = /jerseys|shoes|other|tshirt/;
var imgRegex = /^.*\.(jpg|png)/;
var priceRegex = /^(?:10|[1-9]\d{1,7})(?:\.\d{1,2})?$/;




var insertProduct = document.getElementById("register");
var nameMsg = document.getElementById("nameMsg");
var typeMsg = document.getElementById("typeMsg");
var imgMsg = document.getElementById("imgMsg");
var priceMsg = document.getElementById("priceMsg");




insertProduct.addEventListener("click", function (event) {

    var productName = document.getElementById("productName").value;
    var type = document.getElementById("type").value;
    var imgname = document.getElementById("imgname").value;
    var indexCategory = document.getElementById("indexCategory").value;
    var price = document.getElementById("price").value;


    if (productName == "") {
        nameMsg.innerText = "! Fill Product Name"
        event.preventDefault();
    }

    else {
        if (nameRegex.test(productName)) {

            nameMsg.innerText = "";

        }
        else {
            nameMsg.innerText = "!Fill Name Product Name"
            event.preventDefault();
        }
    }

    if (type == "") {
        typeMsg.innerText = "! Fill Product Type"
        event.preventDefault();
    }

    else {
        if (typeRegex.test(type)) {
            typeMsg.innerText = "";

        }
        else {
            typeMsg.innerText = "! Type must be jerseys, shoes, tshirt or other"
            event.preventDefault();
        }
    }

    if (imgname == "") {
        imgMsg.innerText = "! Fill Image Name"
        event.preventDefault();
    }

    else {
        if (imgRegex.test(imgname)) {
            imgMsg.innerText = "";
        }
        else {
            imgMsg.innerText = "! Image should be png or jpg type"
            event.preventDefault();
        }
    }
    if (price == "") {
        priceMsg.innerText = "! Fill Product Price"
        event.preventDefault();
    }

    else {
        if (priceRegex.test(price)) {
            priceMsg.innerText = "";

        }
        else {
            priceMsg.innerText = "! Price must be $10 or above "
            event.preventDefault();
        }
    }

 


});
