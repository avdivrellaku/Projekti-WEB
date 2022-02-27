<?php

session_start();
$productId = $_GET['id'];
include_once 'productRepository.php';

$productRepository = new ProductRepository();

$product = $productRepository->getProductById($productId);

$productRepository->deleteProduct($productId);

header("location:dashboard.php");

include_once 'auditLogRepository.php';

$userChanging = $_SESSION['username'];

$changedProduct = $product['productName'];

$activity = "Deleted product";

$auditLogRepository = new AuditLogRepository();

$auditLogRepository->activities($userChanging,$activity,$changedProduct);



?>