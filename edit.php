
<?php

session_start();
$userId = $_GET['id'];
include_once 'userRepository.php';



$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);


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
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br><br>
        <input id="nameEdit" type="text" name="name"  value="<?=$user['name']?>"> <br> 
        <label id="nameMsgEdit" for="name"></label><br>
        <input  id="surnameEdit" type="text" name="surname"  value="<?=$user['surname']?>"> <br>
        <label id="surnameMsgEdit" for="surname"></label><br>
        <input id="emailEdit"  type="text" name="email"  value="<?=$user['email']?>"> <br>
        <label id="emailMsgEdit" for="email"></label><br>
        <input id="usernameEdit"  type="text" name="username"  value="<?=$user['username']?>"> <br>
        <label id="usernameMsgEdit" for="username"></label><br>
        <input id="passwordEdit"  type="text" name="password"  value="<?=$user['password']?>"> <br>
        <label id="passwordMsgEdit" for="password"></label><br>
        <input id="roleEdit"  type="text" name="role"  value="<?=$user['role']?>"> <br>
        <label id="roleMsgEdit" for="role"></label><br>

        <input type="submit" id="editButton" name="editButton" value="save"> <br> <br>
    </form>
    <script src="editValid.js"></script>
</body>
</html>

<?php 

if(isset($_POST['editButton'])){	
    $id = $user['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    



    $userRepository->updateUser($id,$name,$surname,$email,$username,$password,$role);
    header("location:dashboard.php");



    include_once 'auditLogRepository.php';

    $userChanging = $_SESSION['username'];

    $changedUser = $_POST['name']." ".$_POST['surname'];

    $activity = "Edited user";

    $auditLogRepository = new AuditLogRepository();

    $auditLogRepository->activities($userChanging,$activity,$changedUser);



}


?>