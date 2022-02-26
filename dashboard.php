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

           
           
    </body>

    </html>
<?php
}
?>
