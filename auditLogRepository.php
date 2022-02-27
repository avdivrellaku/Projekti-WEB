<?php

include_once 'databaseConnection.php';

class AuditLogRepository{   

    private $connection;


    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function activities($user,$activityType,$changedItem){

        $conn = $this->connection;

        $datetime = date("d/m/Y g:i a");
        $sql = "INSERT INTO activities (user,activityType,changedItem,time) values (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$user,$activityType,$changedItem,$datetime]);



    }

    function getActivites(){

        $conn = $this->connection;

        $sql = "SELECT * from activities";


        $statement = $conn->query($sql);
        $activities = $statement->fetchAll();

        return $activities;

    }

























}


?>