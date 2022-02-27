<?php


include_once 'auditLogRepository.php'; 



if(isset($_POST['insertButton'])){
    if(empty($_POST['productName']) || empty($_POST['type']) || empty($_POST['imageName']) || empty($_POST['price'])){
       
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

            

    }


}


?>