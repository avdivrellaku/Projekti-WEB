<?php

include_once 'databaseConnection.php';

class ProductRepository{

private $connection;



function __construct(){
    $connect = new DatabaseConnection;
    $this->connection = $connect->startConnection();
}


function insertProduct($product){

    $connect = $this->connection;

    $id = $product->getProductId();
    $productName = $product->getProductName();
    $type = $product->getType();
    $indexCategory = $product->getIndexCategory();
    $imageName = $product->getImageName();
    $price = $product->getPrice();
    



    $sql = "INSERT INTO products (id,productName,type,indexCategory,imageName,price) VALUES (?,?,?,?,?,?)";

    $statement = $connect->prepare($sql);

    $statement->execute([$id,$productName,$type,$indexCategory,$imageName,$price]);


    echo "<script>alert('Product insert was successful')</script>";
}


function getAllProducts(){

    $connect = $this->connection;

    $sql = "SELECT * from products";


    $statement = $connect->query($sql);
    $products = $statement->fetchAll();

    return $products;


}
function getProductById($id)
    {

        $connect = $this->connection;
        $sql = "SELECT * from products WHERE id = '$id'";
        $statement = $connect->query($sql);
        $product = $statement->fetch();
        return $product;
    }


function getProductsByCategory($indexCategory){

    $connect = $this->connection;

    $sql = "SELECT * from products WHERE indexCategory = '$indexCategory'";


    $statement = $connect->query($sql);
    $products = $statement->fetchAll();

    return $products;


}
function getProductsByType($type){

    $connect = $this->connection;

    $sql = "SELECT * from products WHERE type = '$type'";


    $statement = $connect->query($sql);
    $products = $statement->fetchAll();

    return $products;


}



function updateProducts($id,$productName,$type,$indexCategory,$imageName,$price)
{

    $conn = $this->connection;

    $sql = "UPDATE products SET productName=?, type=?, indexCategory=?, imageName=?, price=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$productName,$type,$indexCategory,$imageName,$price,$id]);

    echo "<script>alert('Update was successful')</script>";
}
function deleteProduct($id){

    $connect = $this->connection;


    $sql = "DELETE FROM products WHERE id=?";

    $statement = $connect->prepare($sql);
    
    $statement->execute([$id]);

    echo "<script>alert('Delete was successful')</script>
        header(location:dashboard.php)";
}



}


?>

