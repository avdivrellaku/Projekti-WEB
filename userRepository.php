<?php

include_once 'databaseConnection.php';

class UserRepository
{

    private $connection;



    function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user)
    {

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $role = $user->getRole();



        $sql = "INSERT INTO users (id,name,surname,email,username,password,role) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $name, $surname, $email, $username, $password, $role]);


        echo "<script>alert('User inserted succesfully')</script>";
    }


    function getAllUsers()
    {

        $conn = $this->connection;

        $sql = "SELECT * from users";


        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id)
    {

        $conn = $this->connection;

        $sql = "SELECT * from users WHERE id = '$id'";


        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }


    function testEmail($user){
        $conn = $this->connection;

        $email = $user->getEmail();

        $sql = "SELECT * from users WHERE email = '$email'";

        $statement = $conn->query($sql);
        $testEmail = $statement->fetchAll();

        if(count($testEmail) == 0){
            return false;
        }
        else{
        return true;
        }


    }
    function testUsername($user){
        $conn = $this->connection;

        $username = $user->getusername();

        $sql = "SELECT * from users WHERE username = '$username'";

        $statement = $conn->query($sql);
        $testUsername = $statement->fetchAll();

        if(count($testUsername) == 0){
            return false;
        }
        else{
        return true;
        }


    }

    function updateUser($id, $name, $surname, $email, $username, $password, $role)
    {

        $conn = $this->connection;


        $sql = "UPDATE users SET name=?, surname=?, email=?, username=?, password=?, role=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name, $surname, $email, $username, $password, $role, $id]);

        echo "<script>alert('Update was successful')</script>";
    }

    function deleteUser($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);
    }
}
