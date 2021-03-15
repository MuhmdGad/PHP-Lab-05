<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  /* background-color: black; */
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.login{
    float: right;
    width: 10%;
}
</style>
</head>
<body>

<?php

    require_once("database.php");

    try {

        $conn=new database();
        $conn=$conn->getDBConnection();

        if($conn){
            $id = $_GET["id"];

            $sth = $conn->prepare("SELECT * FROM std WHERE id = ${id}");
            $sth->execute();

            $result = $sth->fetchAll();

           
        }else{
            echo " Something went Wrong ...";
        }
       

    } catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
 }
?>

<form action="handleupdate.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please Update in this form.</p>

    <hr>

    <label for="firstname"><b>firstname</b></label>
    <input type="text" placeholder="Enter firstname" name="firstname" id="firstname" value="<?= $result[0]["firstname"]?>" required>

    <label for="lastname"><b>lastname</b></label>
    <input type="text" placeholder="Enter lastname" name="lastname" id="lastname" value="<?= $result[0]["lastname"]?>" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" value="<?= $result[0]["email"]?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" value="<?= $result[0]["password"]?>" required>

    <input type="hidden"  name="id" id="id" value="<?= $result[0]["id"]?>">

    
    <hr>

    <input type="submit" name="signup" class="registerbtn" value="Update">

  </div>
  
</form>

</body>
</html>


