<?php
session_start();
$userId = $_GET['id'];

include_once 'userRepository.php';



$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);

$userRepository->deleteUser($userId);

header("location:dashboard.php");

include_once 'auditLogRepository.php';

$userChanging = $_SESSION['username'];

$deletedUser = $user['username'];

$activity = "Deleted user";

$auditLogRepository = new AuditLogRepository();

$auditLogRepository->activities($userChanging,$activity,$deletedUser);





?>