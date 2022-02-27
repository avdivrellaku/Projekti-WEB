
<?php
session_start();
$productId = $_GET['id'];
include_once 'productRepository.php';

$productRepository = new ProductRepository();

$product = $productRepository->getProductById($productId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h3>Edit</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$product['id']?>" readonly> <br><br>
        <input id="nameEdit" type="text" name="productName" placeholder="Product Name" value="<?=$product['productName']?>"> <br> 
        <label id="nameMsgEdit" for="name"></label><br>
        <input  id="surnameEdit" type="text" name="type" placeholder="Type" value="<?=$product['type']?>"> <br>
        <label id="surnameMsgEdit" for="surname"></label><br>
        <input id="emailEdit"  type="text" name="imageName" placeholder="Image Name" value="<?=$product['imageName']?>"> <br>
        <label id="emailMsgEdit" for="email"></label><br>
        <input id="usernameEdit"  type="text" name="indexCtg" placeholder="Index Category" value="<?=$product['indexCategory']?>"> <br>
        <label id="usernameMsgEdit" for="username"></label><br>
        <input id="passwordEdit"  type="text" name="price" placeholder="Price" value="<?=$product['price']?>"> <br>
        <label id="passwordMsgEdit" for="password"></label><br>
       
        <input type="submit" id="editButton" name="saveButton" value="save"> <br> <br>
    </form>
   
</body>
</html> 

<?php 

if(isset($_POST['saveButton'])){	
    $id = $product['id'];
    $productName = $_POST['productName'];
    $type = $_POST['type'];
    $imageName = $_POST['imageName'];
    $price = $_POST['price'];
    $indexCategory = $_POST['indexCtg'];
  
  
   

    $productRepository->updateProducts($id,$productName,$type,$indexCategory,$imageName,$price);
    header("location:dashboard.php");


    include_once 'auditLogRepository.php';

    $userChanging = $_SESSION['username'];

    $activity = "Edited product";

    $auditLogRepository = new AuditLogRepository();

    $auditLogRepository->activities($userChanging,$activity,$productName);

}


?>