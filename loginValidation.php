<?php
   if(isset($_POST['loginButton'])){
       if(empty($_POST['loginUsername']) || empty($_POST['loginPassword'])){
           echo "Fill all fields!";
       }else{
           $username = $_POST['loginUsername'];
           $password = $_POST['loginPassword'];

           include_once 'userRepository.php';
           include_once 'user.php';
        
        $userRepository = new UserRepository();

        $users = $userRepository->getAllUsers();


           $i=0;
           foreach($users as $user){
               $i++;
               if($username == $user['username'] && $password == $user['password']){

                   session_start();
                   $_SESSION['username'] = $username;
                   $_SESSION['password'] = $password;
                   $_SESSION['name'] = $user['name'];
                   $_SESSION['surname'] = $user['surname'];
                   $_SESSION['role'] = $user['role'];
                   header("location:index.php");
                   exit();

               }else{
                   
                   if($i == sizeof($users)){
                    echo "<h5 style='margin-left:40%;color:red;'>!Incorrect Username or Password/User Does Not Exist</h5>";
                   
                   }
                   
               }
           }
       }
   }
 
?>