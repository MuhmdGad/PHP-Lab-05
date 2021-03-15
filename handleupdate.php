<?php

    require_once("database.php");
    require_once("students.php");

try {

          $conn=new database();
        //   $conn=$conn->getDBConnection();

    if($conn){
    
        $new_std = new Students();

        $std_firstname = $new_std->setFirstName($_POST['firstname']);
        $std_lastname = $new_std->setLastName($_POST['lastname']);
        $std_email = $new_std->setEmail($_POST['email']);
        $std_password = $new_std->setPassword($_POST['psw']);

        echo  $std_firstname;

        // $conn->updateUser("std", "firstname='{$_POST['firstname']}',
        // lastname='{$_POST['lastname']}', email='{$_POST['email']}', password='{$_POST['psw']}'", "id = {$_POST['id']}");

        $conn->updateUser("std", "firstname='$std_firstname',lastname='$std_lastname', email='$std_email', password='$std_password'", "id = {$_POST['id']}");

        header('Location: allusers.php');


       
    }else{
        echo " Something went Wrong ...";
    }
   

} catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
}


?>