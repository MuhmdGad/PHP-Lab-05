<?php

    require_once("database.php");

    if(isset($_POST["login"])){


        try {

            $conn=new database();
            // $conn=$conn->getDBConnection();

            if($conn){
               
                $email= $_POST['email'];
                $pass= $_POST['psw'];

                // $sth = $conn->prepare("SELECT email, password FROM std WHERE email = '{$email}' AND password = '{$pass}'  LIMIT 1");
                // $sth->execute();

                // $result = $sth->fetchAll();

               $result =  $conn->getcerData("std", "email, password", "email = '{$email}' AND password = '{$pass}'  LIMIT 1" );

              

                if($result[0]['email'] == $email && $result[0]['password'] == $pass){
                    header('Location: allusers.php');
                }else{
                    header('Location: loginform.php?error=true');
                }

                
            }else{
                echo " Something went Wrong ...";
            }
           

        } catch(PDOException $e) {
                 echo "Connection failed: " . $e->getMessage();
     }

}
       
    
    if(isset($_POST["signup"])){

           

            try {

                // $conn = new PDO('mysql:host=localhost;dbname=students', "root", "1234");
                $conn=new database();

                if($conn){
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $email = $_POST["email"];
                    $password = $_POST["psw"];


                    // $statement = "INSERT INTO std (firstname, lastname, email, password)
                    //              VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$password}')";
                    // $conn -> exec($statement);

                    $conn->insertUser("std", "(firstname, lastname, email, password)", "('{$firstname}', '{$lastname}', '{$email}', '{$password}')");


                    header('Location: allusers.php');
                }else{
                    echo " Something went Wrong ...";
                }
               

            } catch(PDOException $e) {
                     echo "Connection failed: " . $e->getMessage();
         }

    }

?>