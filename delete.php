<?php

    require_once("database.php");

    $id = $_GET["id"];

    try {

        // $conn = new PDO('mysql:host=localhost;dbname=students', "root", "1234");
       
        $conn=new database();
        // $conn=$conn->getDBConnection();


        if($conn){
           
            // $sth = $conn->prepare("DELETE FROM std WHERE id = $id");
            // $sth->execute();

            $conn->deleteUser("std", "id = $id");


            header('Location: allusers.php');


           
        }else{
            echo " Something went Wrong ...";
        }
       

    } catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
 }
?>