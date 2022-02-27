<?php


include_once 'productRepository.php'; 
include_once 'product.php'; 


if(isset($_POST['insertButton'])){
    if(empty($_POST['productName']) || empty($_POST['type']) || empty($_POST['imageName']) || empty($_POST['price'])){
        echo "<h5 style='color:red;font-style:italic;font-family:'Courier New'';'>Fill All Fields</h5>";
    }
   
    else{

        $productName = $_POST['productName'];
        $type = $_POST['type'];
        $imageName = $_POST['imageName'];
        $price = $_POST['price'];
        $indexCategory = $_POST['indexCategory'];
      
        
    
        


        $product = new Product('',$productName,$type,$indexCategory,$imageName,$price);
            $productRepository = new ProductRepository();


            $productRepository->insertProduct($product);

            include_once 'auditLogRepository.php';

            $user = $_SESSION['username'];

            $activity = "Inserted product";

            $auditLogRepository = new AuditLogRepository();

            $auditLogRepository->activities($user,$activity,$productName);

            


        

    }


}


?>