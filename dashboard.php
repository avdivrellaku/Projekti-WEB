<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} else {
    if ($_SESSION['role'] != "admin") {
        header("location:index.php");
    }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

    <style>
        form{
            display:flex;
            flex-direction: column;
            height:420px;
            width: 40%;
            justify-content: space-between;
            color:black;
            align-items: center;
        }

        table{
            
            border-collapse: separate;
            font-family: 'Calibri';
            border-collapse: collapse;
            border: solid #2d2d44;
            background:linear-gradient(to top left, rgb(170, 213, 240),white) no-repeat;
            padding: 2px;
        }
        th,td,tr{
            padding: 5px;
            border:1px solid black;
            
        }

        caption{
            font-size: 25px;
            font-family: 'Courier New';
        }
       td a{
            text-decoration:none;
            color:white;
            background-color: #2d2d44;
            padding:2px;
            border:1px solid #2d2d44;
            border-radius: 5px;
            transition: .5s ease;
           
            
       }

       td a:hover{
           color: black;
           background-color: transparent;
           transition: .5s ease;
       }

       
        </style>

        <link rel="stylesheet" type="text/css" href="indexStyle.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>

    <body style="background:white;">
        <div style="justify-content:space-evenly;flex-direction:column;" class="banner">
            <div class="logo">

                <a href="index.php"><img id="test" class="img" src="images/logo4.png"></a>

            </div>
            <a style="color:black;text-decoration:none;"href="dashboard.php"><div  style="margin-left:24%" class="title" id="title">
                Dashboard
            </div></a>
        </div>

        <div class="tables" style="min-height:600px;
        padding-top:30px;display:flex;flex-direction:row;justify-content:space-around;flex-wrap:wrap;">
     
     <table >
                <caption>PRODUCTS TABLE</caption>
                <th>ID</th>
                <th>ProductName</th>
                <th>Type</th>
                <th>Image Name</th>
                <th>Price($)</th>
                <th>Index Category</th>
                <th colspan="2">UPDATE or DELETE</th>
                <?php

    include_once 'productRepository.php';

    $productRepository = new ProductRepository();

    $products = $productRepository->getAllProducts();

                foreach ($products as $product) {
                    echo
                    "
    <tr>
         <td>$product[id]</td>
         <td>$product[productName]</td>
         <td>$product[type] </td>
         <td>$product[imageName] </td>
         <td>$product[price] </td>
         <td>$product[indexCategory] </td>
         <td><a href='editProducts.php?id=$product[id]'>Edit</a> </td>
         <td><a href='deleteProducts.php?id=$product[id]'>Delete</a></td>
         
    </tr>
    ";
                }



                ?>

            </table>
           
           
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <h4 style="font-family:'Calibri';">Add a New Product</h4>
              
              <input style="width:40%" type="text" id="productName" name="productName" placeholder="Product Name"> 
              <label id="nameMsg" ></label>
              <input style="width:40%" type="text" id="type" name="type" placeholder="Type">
              <label id="typeMsg" ></label>
              <input style="width:40%" type="text" id="imgname" name="imageName" placeholder="Image Name">
              <label id="imgMsg" ></label>
              <input style="width:40%" type="text" id="indexCategory" name="indexCategory" placeholder="Index Category">
              <label id="indexMsg" ></label>
              <input style="width:40%" type="text"  id="price" name="price" placeholder="Price($)">
              <label id="priceMsg" ></label>
             

              
                  <input style="align-self:center"type="submit" id="register" name="insertButton" value="Insert">
                  <?php include_once 'productController.php'?>
          </form>
         
            </div>

            
            <hr>
            <table style="max-height:10px; margin-left:2.60%;margin-bottom:3%" >
                <caption>USERS TABLE</caption>

                <tr>

                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>EMAIL</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ROLE</th>
                    <th colspan="2">UPDATE OR DELETE</th>



                </tr>

                <?php
                include_once 'userRepository.php';
              

                $userRepository = new UserRepository();

                $users = $userRepository->getAllUsers();

                foreach ($users as $user) {
                    echo
                    "
    <tr>
         <td>$user[id]</td>
         <td>$user[name]</td>
         <td>$user[surname] </td>
         <td>$user[email] </td>
         <td>$user[username] </td>
         <td>$user[password] </td>
         <td>$user[role]</td>
         <td><a  href='edit.php?id=$user[id]'>Edit</a> </td>
         <td><a  href='delete.php?id=$user[id]'>Delete</a></td>
   
         
    </tr>
   
    ";
                }
                ?>
            </table>
            <hr>
            <table style="max-height:10px; margin-left:2.60%;margin-bottom:3%" >
                <caption>ACTIVITES TABLE</caption>

                <tr>

                    <th>ID</th>
                    <th>USER</th>
                    <th>ACTIVITY</th>
                    <th>CHANGED ITEM</th>
                    <th>TIME</th>
                   



                </tr>

                <?php
                include_once 'auditLogRepository.php';
             
                $auditLogRepository = new AuditLogRepository();

                $activities = $auditLogRepository->getActivites();  

                foreach ($activities as $activity) {
                    echo
                    "
    <tr>
         <td>$activity[id]</td>
         <td>$activity[user]</td>
         <td>$activity[activityType] </td>
         <td>$activity[changedItem] </td>
         <td>$activity[time]</td>
    
    </tr>
   
    ";
                }
                ?>
            </table>

            

           
           <script src="productsInsertvalid.js"></script>
    </body>

    </html>
<?php
}
?>
